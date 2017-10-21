<?php

/******************************************************************************
 * tue.phpmailer@gmail.com                                                    *
 ******************************************************************************/

App::uses('AppController', 'Controller');
App::uses('CakeSession', 'Model/Datasource');
App::import('Model', 'CakeSession');

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

    public $components = array('Acl',  'Session', 'RequestHandler');
    public $helpers = array('Html', 'Form', 'Js' => array('Jquery'));


    function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'cart';

        // Change layout for Ajax requests
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax_cart';
        }

    }

    public function add()
    {
        $this->autoRender = false;

        if ($this->request->is('post')) {

            $this->Cart->addProduct($this->request->data['cart']);

        }

        echo $this->Cart->getCount();
    }

    public function view()
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

        $order_schema = $this->Order->findById('1430'); // 1430, 614 high total cost money

        $order = $order_schema['Order'];
        $order_code = $order['order_code'];
        $order_id = $order['id'];
        $p = $order_schema['OrderDetail'];

        $total_money = 0 ;


        foreach ($p as $product) {

            $tmp_p = $this->Product->findById($product['product_id']);

            //(1:domain, 2:window hosting, 3:linux hosting, 4:other)

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

        $conditions = array(
            'OR' => array(
                array('product_type' => '2'),
                array('product_type' => '3')
            )
        );

        $hosts = $this->Product->find('all', array(
                    'fields' => array( 'id', 'product_key', 'product_type', 'product_name', 'price', 'price_1', 'price_2',),
                    'conditions' => $conditions,
                    'recursive' => 0,
                    'limit' => 10,
             )
        );

        foreach ($hosts as $host) {
            $list_hosting[] = $host['Product'];
        }

        $this->set(compact('products'));
        $this->set(compact('order_id'));
        $this->set(compact('order'));
        $this->set(compact('order_code'));
        $this->set(compact('list_hosting'));

    }

    public function update()
    {

        $cart = array();

        $request = $this->request->data;

        $this->autoRender = false;
        $this->request->onlyAllow('ajax'); // No direct access via browser URL

        //$this->RequestHandler->isAjax();
        //Debugger::dump($request);
        //Debugger::dump($this->Order->findById($request['cart']['order']['id']));

        $cart = $request['cart'] ;
        //Debugger::dump($cart);

        $this->Cart->addProduct($cart);

        if ($this->request->is('post')) {
            if (!empty($request) && count($request) > 0 && count($request['cart'] > 0)) {
                //        $this->Cart->saveProduct($cart);
            }
        }

        //Debugger::dump();

        $content = 'Ajax success';

        //set current date as content to show in view
        $this->set(compact('content'));


        Debugger::dump($this->Session->read('cart'));

        //$this->Session->destroy();
        //$this->Session->delete('cart');
        //render spacial view for ajax
        $this->render('ajax_update', 'ajax_cart');

        //$this->redirect(array('action' => 'view'));
    }

}