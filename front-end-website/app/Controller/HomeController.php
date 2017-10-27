<?php
	/**
	* 
	*/
	class HomeController extends AppController{
		
        public $uses = array('Account', 'Cart','News');
        
        public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');


		public function index(){
			

			$data=$this->News->find("all", array(
				
				'order' => array( 'id DESC'),
				'limit' => 1,
			));
			
			$this->set('data',$data);
        }
	}
?>