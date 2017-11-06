<?php
	App::uses('AppController', 'Controller');

	class SslController extends AppController{

		public $uses = array
				(
					'ProductPrice',
				);
				
		public function index()
		{
			$data=$this->ProductPrice->find('all', array( 'conditions' => array('product_type LIKE' => "6" ) ));
			
			$this->set('data',$data);
		}

	}

?>