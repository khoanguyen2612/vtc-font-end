<?php
	/**
	* 
	*/
	class HomeController extends AppController{

		public $uses = array('Account');
		
		public function index(){
			if($this->Auth->user()){
				$login=$this->Auth->user('nickname');
				// pr($login);die;
				$this->set('login',$login);
			}
		}
	}
?>