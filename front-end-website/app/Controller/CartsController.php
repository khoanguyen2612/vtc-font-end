<?php

/******************************************************************************
 * tue.phpmailer@gmail.com                                                    *
 ******************************************************************************/

App::uses('AppController', 'Controller');

/**
 * Class CartsController
 */
class CartsController extends AppController
{

    /**
     * @var array
     */
    public $uses = array('Product', 'Cart', 'Order');
    //var $layout = 'cart';


    function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'cart';
    }

    public function add()
    {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $this->Cart->addProduct($this->request->data['Cart']['product_id']);
        }
        echo $this->Cart->getCount();
    }

    public function view()
    {

        ini_set('memory_limit', '-1');
        //Debugger::dump($this->Product->find('first'));

        $order_schema = $this->Order->find('first',
            array( 'order' => array('Order.id' => 'desc') )
        );

        /*Debugger::dump();*/
        //Debugger::dump($order_schema);

        $order = $order_schema['Order'];
        $order_code = $order['order_code'];
        $p = $order_schema['OrderDetail'];

        $total_money = 0 ;
        foreach ($p as $product) {

            $tmp_p = $this->Product->findById($product['product_id']);

            //(1:domain, 2:window hosting, 3:linux hosting, 4:other)
            /*$p_type = ($tmp_p['Product']['product_type'] == 1) ? 'domain' : 'other';
            $p_type = ($tmp_p['Product']['product_type'] == 2) ? 'window hosting' : 'other';
            $p_type = ($tmp_p['Product']['product_type'] == 3) ? 'linux hosting' : 'other';*/
            //Debugger::dump($tmp_p['Product']['product_type']);

            $type = $tmp_p['Product']['product_type'];
            switch ($type)
            {
                case '1':
                    $p_type = 'domain';
                    break;

                case '2':
                    $p_type = 'window hosting';
                    break;
                case '3':
                    $p_type = 'linux hosting';
                    break;
                case '4':
                    $p_type = 'other';
                    break;
            }

            $product['type'] = $p_type;
            $total_money += $product['quantity'] * $product['price'];
            $product['total_money'] = $total_money;
            $products[] = $product;

        }


        /*$carts = $this->Cart->readProduct();
        $products = array();
        if (null != $carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Product->read(null, $productId);
                $product['Product']['count'] = $count;
                $products[] = $product;
            }
        }*/

        $this->set(compact('products'));
        $this->set(compact('order'));
        $this->set(compact('order_code'));

    }

    public function update()
    {
        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $cart = array();
                foreach ($this->request->data['Cart']['count'] as $index => $count) {
                    if ($count > 0) {
                        $productId = $this->request->data['Cart']['product_id'][$index];
                        $cart[$productId] = $count;
                    }
                }
                $this->Cart->saveProduct($cart);
            }
        }
        $this->redirect(array('action' => 'view'));
    }

}