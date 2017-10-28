<?php
/******************************************************************************
 * tue.phpmailer@gmail.com                                                    *
 ******************************************************************************/

App::uses('AppModel', 'Model');
App::uses('CakeSession', 'Model/Datasource');
App::uses('CakeTime', 'Utility');

class Cart extends AppModel
{

    public $useTable = false;

    /*
     * add a product to cart
     */
    public function addProduct($cart_item = array())
    {

        $all_cart = CakeSession::read('cart');
        //array_unshift($all_cart, $cart_item); // push value elements onto first array

        if (count($cart_item) > 0) {
            //array_push($all_cart, $cart_item); // push value elements onto the end of array
            $all_cart['list'] = $cart_item;
            $all_cart[] = $cart_item;  // push value elements onto the end of array
        }

        $this->saveProduct($all_cart);
        //Save item in DB table
        //$this->saveDbItemCart($cart_item);

    }

    /*
     * get total count of products
     */
    public function getCount()
    {

        $all_cart = $this->readProduct();
        //Debugger::dump($all_cart);

       /* if (!is_null($all_cart) && is_array($all_cart)) {
            $all_item = array_shift($all_cart);  // shift an element off the beginning of array
        }

        return count($all_item);*/
        return count($all_cart) - 1;
    }

    /*
     * save data to session
     */
    public function saveProduct($data)
    {

        return CakeSession::write('cart', $data);
    }

    /*
     * read cart data from session
     */
    public function readProduct()
    {

        return CakeSession::read('cart');
    }

    public function saveCart($data)
    {

        return CakeSession::write('cart', $data);
    }

    /*
     * read cart data from session
     */
    public function readCart()
    {

        return CakeSession::read('cart');
    }

    public function removeCart()
    {

        return CakeSession::delete('cart');
    }

    public function remove_it($id_it = null)
    {

        $all_cart = $this->readProduct();
        CakeSession::delete('cart');

        Debugger::dump($all_cart);

        $product_tmp = $all_cart[count($all_cart) - 1];
        unset($all_cart[count($all_cart) - 1]);

        if (!is_null($id_it) && $id_it > 0) {
            foreach ($all_cart as $key => $it) {
                if ($it['product']['id'] == $id_it) {
                    $key_store = $key;
                    break;
                }
            }
        }

        if (!is_null($key_store) && $key_store > 0) {
            unset($all_cart[$key_store]);
            unset($product_tmp[$key_store]);
        };

        $all_cart[] = $product_tmp;

        $this->Cart->saveCart($all_cart);

        Debugger::dump($all_cart);
        Debugger::dump($all_cart[count($all_cart) - 1]);

        die();

    }


    public function checkoutCart()
    {
        $all_cart = $this->readProduct();
        return CakeSession::delete('cart');
    }

    public function saveDbCart()
    {

        $all_cart = $this->readProduct();
        $order_detail = array();

        if (!empty($all_cart)) {

            foreach ($all_cart as $item) {

                $order_detail['order_id'] = $item['order']['id'];
                $order_detail['product_id'] = $item['product']['id'];
                $order_detail['domain_name'] = $item['product']['product_name'];

                $order_detail['action_id'] = 0;
                $order_detail['order_type'] = 1;
                $order_detail['order_dtl_status'] = 1;
                $order_detail['price'] = $item['product']['price']; // int
                $order_detail['quantity'] = 1;  // int
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

                try {

                    App::import('Model', 'OrderDetail');
                    $OrderDetail = new OrderDetail();
                    $OrderDetail->save($order_detail);

                } catch (Exception $e) {
                    echo 'Error insert order_detail:' . $e->getMessage();
                }

            }

        }

        return CakeSession::delete('cart');
    }

    private function saveDbItemCart($item)
    {

        $order_detail = array();
        if (!empty($item)) {

            $order_detail['order_id'] = $item['order']['id'];
            $order_detail['product_id'] = $item['product']['id'];
            $order_detail['domain_name'] = $item['product']['product_name'];

            $order_detail['action_id'] = 0;
            $order_detail['order_type'] = 1;
            $order_detail['order_dtl_status'] = 1;
            $order_detail['price'] = $item['product']['price']; // int
            $order_detail['quantity'] = 1;  // int
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

            try {

                App::import('Model', 'OrderDetail');
                $OrderDetail = new OrderDetail();
                $OrderDetail->save($order_detail);

            } catch (Exception $e) {
                echo 'Error insert order_detail:' . $e->getMessage();
            }
        }

    }

}




