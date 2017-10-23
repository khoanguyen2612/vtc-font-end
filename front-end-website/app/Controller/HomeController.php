<?php
	/**
     * tue.phpmailer@gmail.com fix conflick
	*/
	class HomeController extends AppController{

        public $uses = array('Account', 'Cart');
        public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');


		public function index(){

        }
	}
?>