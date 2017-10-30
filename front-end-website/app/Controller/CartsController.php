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

        $this->session_cart = $this->Cart->readCart();

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

        /*Debugger::dump($this->Cart->readProduct());
        Debugger::dump(CakeSession::read('cart'));
        Debugger::dump($this->Session->read('cart'));
        Debugger::dump("------------------------------");*/

        //Debugger::dump(CakeSession::read('cart'));

        $cart = $this->Cart->readCart();

        $order_schema = $this->Order->findById('614'); // 1430, 614, 1477 high total cost money
        $order = $order_schema['Order'];
        $order_code = $order['order_code'];
        $order_id = $order['id'];
        $product_in_order = $order_schema['OrderDetail'];
        //Debugger::dump($product_in_order);



        if (is_null($cart) || empty($cart) || !count($cart) ) {

            foreach ($product_in_order as $p_item) {

                $_p = $this->Product->findById($p_item['product_id']);

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

        //Debugger::dump($cart);

        if (isset($cart['list']))
            $all_item = array_shift($cart);  // shift an element off the beginning of array
        else
            $all_item = $cart;

        //Debugger::dump(CakeSession::read('cart'), 4);
        //Debugger::dump($all_item);
        $products = $all_item;

        if (count($products)  > 0) {
            foreach ($products as $it ) {
                $total_money += $it['price'] * $it['quantity'];

            }
        }

        //Debugger::dump($n_element);
        //Debugger::dump($cart);
        //Debugger::dump(end($cart));

        $this->set(compact('n_item_cart'));
        $this->set(compact('total_money'));
        $this->set(compact('products'));

        $this->set(compact('order_id'));
        $this->set(compact('order'));
        $this->set(compact('order_code'));
        $this->set(compact('list_hosting'));

        //$this->Cart->removeCart();

    }

    public function update()
    {

        $request = $this->request->data;
        $this->autoRender = false;
        $this->request->onlyAllow('ajax'); // No direct access via browser URL

        //Debugger::dump($this->Order->findById($request['cart']['order']['id']));

        $cart = $request['cart'];

        //Debugger::dump($cart['product']['product_type']);
        //Debugger::dump($cart['product']['product_type']);
        //Debugger::dump($cart['order']['id']);
        //die();

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

                //Debugger::dump($order_detail);

            }

            $this->Cart->addProduct($cart);
        }

        //$cart = $this->Cart->readCart();
        //Debugger::dump($cart);


        $this->set(compact('cart'));
        //Debugger::dump( $this->Session->read('cart'));
        //Debugger::dump( $this->Cart->getCount());

        //$this->Cart->saveDbCart();
        //$this->Cart->checkoutCart();
        //$this->Session->destroy();
        //$this->Session->delete('cart');

        //render spacial view for ajax
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
        if ($this->request->is('post')) {
            $res = $this->request->data;
            if (count($res) > 0) {

            }

        }

    }

    public function finish()
    {
        // Payment port return GET/POST
        if ($this->request->is('get')) {
            $res = $this->request->data;
            if (count($res) > 0) {

            }

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

        $this->Cart->saveDbCart();

        $this->redirect(array("controller" => "cart",
                "action" => "register",
                //"param1" => "val1",
                //"param2" => "val2")
            )
        );
    }

}