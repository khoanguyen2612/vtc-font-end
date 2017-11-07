<?php

/******************************************************************************
 * tue.phpmailer@gmail.com                                                    *
 ******************************************************************************/

App::uses('AppController', 'Controller');
App::uses('CakeTime', 'Utility');

/**
 * Class CartsController
 */
class CartsController extends AppController
{

    /**
     * @var array
     */
    //var $layout = 'cart';

    public $uses = array('Product', 'Cart', 'Order', 'OrderDetail');
    public $components = array('Acl', 'RequestHandler');
    public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');
    var $session_cart = array();

    function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'cart';

        // Change layout for Ajax requests
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax_cart';
        }


        $this->Session->write('order_code', 'CL_VTC_AZ_');
        $this->Session->write('total_money', 0);

        $cart = $this->Cart->readCart();

        if (isset($cart) && !is_null($cart)) {

            if (isset($cart['list']))
                $all_item = array_shift($cart);  // shift an element off the beginning of array
            else
                $all_item = $cart;

            $total_money = 0;
            $products = $all_item;

            if (count($products)  > 0) {
                foreach ($products as $it ) {
                    $total_money += $it['price'] * $it['quantity'];
                }
            }

            $this->Session->delete('total_money');
            $this->Session->write('total_money', $total_money);
        }


        $this->Order->setDataSource('db_vtc_cloud');
        $this->Product->setDataSource('db_vtc_cloud');
        $this->OrderDetail->setDataSource('db_vtc_cloud');
        //$this->Plan->setDataSource('db_vtc_cloud');
        //$results = $this->Order->query('SELECT * FROM orders WHERE id= "614"');
        //Debugger::dump($results);



        //$this->Order->recursive = -1;
        $order_schema = $this->Order->findById('614'); // 1430, 614, 1477 high total cost money
        $order = $order_schema['Order'];
        //Debugger::dump($order_schema);

        $this->Session->delete('order_code');
        $this->Session->write('order_code', $order['order_code']);

    }

    public function add()
    {
        $this->autoRender = false;

        if ($this->request->is('post')) {

            $this->Cart->addProduct($this->request->data['cart']);

        }

        echo $this->Cart->getCount();
    }

    public function view($param = null)
    {

        ini_set('memory_limit', '-1');

        /* tue.phpmailer@gmail.com get data for first */
        /*$order_schema = $this->Order->find('first',
            //array( 'order' => array('Order.id' => 'desc') )
            array( 'order' => array('Order.id' => 'asc') )
        );*/

        $this->Order->setDataSource('db_vtc_cloud');
        $this->Product->setDataSource('db_vtc_cloud');


        $cart = $this->Cart->readCart();

        //$this->Order->recursive = 2;

        //$this->Order->OrderDetail->attach('Containable');

        $order_schema = $this->Order->findById('614'); // 1430, 614, 1477 high total cost money
        $order = $order_schema['Order'];
        $order_code = $order['order_code'];

        $order_id = $order['id'];
        $product_in_order = $order_schema['OrderDetail'];

        //Debugger::dump($product_in_order);
        //Debugger::dump($order_schema);
        /*$od = $this->OrderDetail->findByOrderId('614');
        Debugger::dump($od);*/


        if (is_null($cart) || empty($cart) || !count($cart) ) {

            foreach ($product_in_order as $p_item) {

                $this->Product->recursive = 2;
                $_p = $this->Product->findById($p_item['product_id']);

                Debugger::dump($_p);

                if (count($_p) > 0) {

                    //(1:domain, 2:window hosting, 3:linux hosting, 4:other)
                    $type = $_p['Product']['product_type'];

                    switch ($type) {
                        case '1':
                            $p_type = 'Domain';
                            break;
                        case '2':
                            $p_type = 'Window hosting';
                            break;
                        case '3':
                            $p_type = 'Linux hosting';
                            break;
                        case '4':
                            $p_type = 'Other';
                            break;
                        default :
                            $p_type = 'Other';
                            break;
                    }

                    $p_item['type'] = $p_type;
                    $products[] = $p_item;


                }
            }

            $cart = array();
            foreach ($products as $item) {
                $cart['list'][] = $item;
                $tmp['order'] = array('id' => $order_id);
                $tmp['product'] = $item;
                $cart[] = $tmp;
            }

            // ksort($cart);
            // re soft list key of array
            // sort($cart);

            $this->Cart->saveCart($cart);
        };

        $conditions = array(
            'OR' => array(
                array('product_type' => '2'),
                array('product_type' => '3')
            )
        );

        $hosts = $this->Product->find('all', array(
                    'fields' => array( 'id', 'product_type', 'product_key', 'product_type', 'product_name', 'price', 'price_1', 'price_2',),
                    'conditions' => $conditions,
                    'recursive' => 0,
                    'limit' => 100,
             )
        );

        foreach ($hosts as $host) {
            $list_hosting[] = $host['Product'];
        }

        $total_money = 0;
        $n_item_cart = $this->Cart->getCount();

        if (isset($cart['list']))
            $all_item = array_shift($cart);  // shift an element off the beginning of array
        else
            $all_item = $cart;

        $products = $all_item;

        if (count($products)  > 0) {
            foreach ($products as $it ) {
                $total_money += $it['price'] * $it['quantity'];
            }
        }

        $this->Session->delete('total_money');
        $this->Session->write('total_money', $total_money);

        $this->set(compact('n_item_cart'));
        $this->set(compact('total_money'));
        $this->set(compact('products'));

        $this->set(compact('order_id'));
        $this->set(compact('order'));
        $this->set(compact('order_code'));
        $this->set(compact('list_hosting'));

    }

    public function update()
    {

        $request = $this->request->data;
        $this->autoRender = false;
        $this->request->onlyAllow('ajax'); // No direct access via browser URL

        //Debugger::dump($this->Order->findById($request['cart']['order']['id']));

        $cart = $request['cart'];

        if ($this->request->is('post')) {
            if (!empty($request) && count($request) > 0 && count($request['cart'] > 0)) {

                //Debugger::dump($cart);
                // define 1 product in order detail item to add on to cart,
                // for Database
                $order_detail['id'] = rand(95000, 99999);  // new id for item in OrderDetail on to session Cart

                $order_detail['order_id'] = $cart['order']['id'];
                $order_detail['product_id'] = $cart['product']['id'];
                $order_detail['domain_name'] = $cart['product']['product_name'];
                $order_detail['action_id'] = 0;
                $order_detail['order_type'] = 1;
                $order_detail['order_dtl_status'] = 1;
                $order_detail['price'] = $cart['product']['price']; // int
                $order_detail['quantity'] = $cart['product']['quantity'];;  // int
                $order_detail['amount'] = 0;
                $order_detail['total'] = 0;
                $order_detail['discount'] = 0;
                $order_detail['code_affilates'] = 'CODE_AFF_0321A';
                $order_detail['code_qc'] = 'CODE_QC_0321A';
                $order_detail['notes'] = 'Thông tin note khách hàng mua sản phẩm'; // string
                $order_detail['payment_method'] = 0;

                $date_getmoney = CakeTime::format(date('Y-m-d H:i:s'), '%Y-%m-%d %H:%M:%S', 'N/A', 'Asia/Ho_Chi_Minh');

                $order_detail['date_getmoney'] = $date_getmoney; // string, varchar

                $order_detail['money_kd'] = 0;
                $order_detail['flg_renew'] = 0;
                $order_detail['hosting_id'] = 0;
                $order_detail['customer_id'] = 0;
                $order_detail['campainh'] = 'ký tự, unknow value ?';  // varchar
                $order_detail['totenten'] = 'ký tự, unknow value ?';  // varchar
                $order_detail['csr_string'] = 'ký tự, unknow value ?';  // varchar
                $order_detail['payment_activator'] = 'Người active Payment'; // string
                $order_detail['auth_code_tranfer'] = 'ACT_0321A'; // string
                $order_detail['detail_id_sub'] = 0;
                $order_detail['flg_smartphone'] = 0;
                $order_detail['user_confirm_active'] = 'UCA_0321A'; // string

                $order_detail['ketoan_update'] = $date_getmoney;  // datetime
                $order_detail['note_ketoan'] = 'Ghi nhớ cho kế toán'; // string

                // Update field product of cart array
                // for view layout
                switch ( (string) $cart['product']['product_type']) {
                    case '1':
                        $p_type = 'Domain';
                        break;
                    case '2':
                        $p_type = 'Window hosting';
                        break;
                    case '3':
                        $p_type = 'Linux hosting';
                        break;
                    case '4':
                        $p_type = 'Other';
                        break;
                    default :
                        $p_type = 'Other';
                        break;
                }

                $order_detail['product_type'] = $cart['product']['product_type'];
                $order_detail['product_name'] = $cart['product']['product_name'];
                // for view layout
                $order_detail['type'] = $p_type;
                $cart['product'] = $order_detail;

            }

            $this->Cart->addProduct($cart);
        }

        $this->set(compact('cart'));
        $this->render('ajax_update', 'ajax_cart');

    }

    public function continue_buy_product()
    {
        $this->autoRender = false;

        $this->redirect(array("controller" => "home",
                "action" => "index",
                //"param" => "val",
                //"param_1" => "val1")
            )
        );

    }

    public function payment()
    {
        $res = $this->request->data;

        if ($this->request->is('post') || $this->request->is('get')) {

            $order_code = $this->Session->read('order_code');
            $total_money = $this->Session->read('total_money');

            $total_payment = $total_money - round($total_money * 10 / 100);

            $this->set(compact('order_code'));
            $this->set(compact('total_payment'));
        }

    }

    public function vtc_payment()
    {

        $this->autoRender = false;
        $res = $this->request->data;

        $destinationUrl = "http://alpha1.vtcpay.vn/portalgateway/checkout.html";

        if ($this->request->is('post')) {

            $plaintext = $res["txtTotalAmount"] . "|" .
                         $res["txtCurency"] . "|" .
                         $res["txtParamExt"] . "|" .
                         $res["txtReceiveAccount"] . "|" .
                         $res["txtOrderID"] . "|" .
                         $res["txtUrlReturn"] . "|" .
                         $res["txtWebsiteID"] . "|" .
                         $res["txtSecret"];

            echo $plaintext;

            $sign = strtoupper(hash('sha256', $plaintext));

            $data = "?website_id=" .
                    $res["txtWebsiteID"] . "&currency=" .
                    $res["txtCurency"] . "&reference_number=" .
                    $res["txtOrderID"] . "&amount=" .
                    $res["txtTotalAmount"] . "&receiver_account=" .
                    $res["txtReceiveAccount"]. "&url_return=". urlencode($res["txtUrlReturn"]). "&signature=". $sign. "&payment_type=". $res["txtParamExt"];

            $bill_to_surname = htmlentities($res["txtCustomerFirstName"]);
            $bill_to_forename = htmlentities($res["txtCustomerLastName"]);
            $bill_to_address = htmlentities($res["txtBillAddress"]);
            $bill_to_address_city = htmlentities($res["txtCity"]);
            $bill_to_email = htmlentities($res["txtCustomerEmail"]);
            $bill_to_phone = htmlentities($res["txtCustomerMobile"]);
            $language = htmlentities($res["txtParamLanguage"]);

            $destinationUrl = $destinationUrl . $data;

            echo "||||" . $destinationUrl;

            $this->redirect($destinationUrl );

            //header('Location: ' . $destinationUrl);

        }

    }

    public function finish()
    {
        // Payment port return GET/POST
        $res = $this->request->data;

        $id_acc = $this->Auth->User('id');
        $user_info = $this->Account->findById($id_acc);

        $u_name = $email = $cmtnd = $phone = '';

        if (count($user_info) > 0) {

            $u_name = $user_info['Account']['name'];
            $email = $user_info['Account']['email'];
            $cmtnd = $user_info['Account']['CMTND'];
            $phone = $user_info['Account']['phonenumber'];

        }

        $cart = $this->Cart->readCart();

        $products = $cart['list'];

        if ($this->request->is('post') || $this->request->is('get')) {

            $order_code = $this->Session->read('order_code');
            $total_money = $this->Session->read('total_money');
            $total_vat = round($total_money * 10 / 100);
            $total_payment = $total_money - round($total_money * 10 / 100);

            $date_day = CakeTime::format(date('Y/m/d'), '%Y/%m/%d', 'N/A', 'Asia/Ho_Chi_Minh');
            $time_h = CakeTime::format(date('H:i:s'), '%H:%M:%S', 'N/A', 'Asia/Ho_Chi_Minh');

            $this->set(compact('u_name'));
            $this->set(compact('email'));
            $this->set(compact('cmtnd'));
            $this->set(compact('phone'));

            $this->set(compact('products'));
            $this->set(compact('order_code'));
            $this->set(compact('total_money'));
            $this->set(compact('total_payment'));
            $this->set(compact('total_vat'));

            $this->set(compact('date_day'));
            $this->set(compact('time_h'));

        }

    }

    public function remove()
    {
        $this->autoRender = false;

        if ($this->request->is('post')) {
            $res = $this->request->data;
            if (count($res) > 0)
                $this->Cart->remove_it($res['id_odetail_product']);
        }

        $this->redirect(array("controller" => "carts",
                "action" => "view",
                //"param1" => "item_del",
            )
        );
    }

    public function del_ajax_it()
    {

        $this->autoRender = false;
        $this->request->onlyAllow('ajax'); // No direct access via browser URL

        if ($this->RequestHandler->isAjax()) {
            if ($this->request->is('post')) {
                $n_item = $this->Cart->getCount();
                $this->set(compact('n_item'));
                $this->render('ajax_up_i_cart', 'ajax_cart');
            }
        }

    }

    public function update_ajax_it()
    {

        $this->autoRender = false;
        $this->request->onlyAllow('ajax'); // No direct access via browser URL

        if ($this->RequestHandler->isAjax()) {
            if ($this->request->is('post')) {
                $n_item = $this->Cart->getCount();
                $this->set(compact('n_item'));
                $this->render('ajax_up_i_cart', 'ajax_cart');
            }
        }


    }

    public function update_ajax_sum_money()
    {

        $this->autoRender = false;
        $this->request->onlyAllow('ajax'); // No direct access via browser URL

        if ($this->RequestHandler->isAjax()) {
            Configure::write('debug', 0);
        }

        if ($this->RequestHandler->isAjax()) {
            if ($this->request->is('post')) {

                $cart = $this->Cart->readCart();

                if (isset($cart['list']))
                    $all_item = array_shift($cart);  // shift an element off the beginning of array
                else
                    $all_item = $cart;

                $total_money = 0;
                $products = $all_item;

                if (count($products)  > 0) {
                    foreach ($products as $it ) {
                        $total_money += $it['price'] * $it['quantity'];
                    }
                }

                $this->Session->delete('total_money');
                $this->Session->write('total_money', $total_money);

                $total_money_vat =  round($total_money * 10 / 100);
                $total_money_finish = $total_money - $total_money_vat;

                $this->response->body(json_encode(array(
                    'total_money' => $total_money,
                    'total_money_vat' => $total_money_vat,
                    'total_money_finish' => $total_money_finish,

                )));

                $this->response->send();
                $this->_stop();

            }
        }

    }


    public function checkout()
    {

        $this->autoRender = false;
        //$this->Cart->saveDbCart();

        $this->redirect(array("controller" => "carts",
                "action" => "register",
                //"param1" => "val1",
                //"param2" => "val2")
            )
        );
    }

}