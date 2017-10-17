<?php

/******************************************************************************
 * tue.phpmailer@gmail.com                                                    *
 ******************************************************************************/

App::uses('AppController', 'Controller');

class ProductsController extends AppController
{

    /**
     * ProductsController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $this->set('products', $this->Product->find('all'));
    }

    public function view($id)
    {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }

        $product = $this->Product->read(null, $id);
        $this->set(compact('product'));
    }

}