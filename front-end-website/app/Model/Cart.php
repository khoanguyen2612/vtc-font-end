<?php
/******************************************************************************
 * tue.phpmailer@gmail.com                                                    *
 ******************************************************************************/

App::uses('AppModel', 'Model');
App::uses('CakeSession', 'Model/Datasource');
App::import('Model', 'CakeSession');
App::import('Component', 'SessionComponent');

class Cart extends AppModel
{

    public $useTable = false;
    public $components = array('Session');

    /*
     * add a product to cart
     */
    public function addProduct($cart_item)
    {
        $all_cart = $this->readProduct();
        $all_cart[] = $cart_item;
        $this->saveProduct($all_cart);
    }

    /*
     * get total count of products
     */
    public function getCount()
    {
        $all_cart = $this->readProduct();

        if (count($all_cart) < 1) {
            return 0;
        }

        $count = 0;
        foreach ($all_cart as $item) {
            if (count(@ $item['product']) > 0) {
                $count++;
            }
        }

        return $count;
    }

    /*
     * save data to session
     */
    public function saveProduct($data)
    {
        return $this->Session->write('cart', $data);
        //return CakeSession::write('cart', $data);
    }

    /*
     * read cart data from session
     */
    public function readProduct()
    {
        return $this->Session->read('cart');
        //return CakeSession::read('cart');
    }

}