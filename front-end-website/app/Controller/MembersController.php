<?php
	/**
	* 
	*/
	class MembersController extends AppController{
		public $uses = array('Account');

		public function login(){

		}

		public function register(){
			$this->set('title_for_layout', 'Đăng kí tài khoản');
			if($this->request->is('Post')){
				pr($this->request->data);die;
			}
		}

		public function forgetpass(){

		}

		public function index(){

		}
	}
?>