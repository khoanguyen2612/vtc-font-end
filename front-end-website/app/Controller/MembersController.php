<?php
	App::uses('AppController', 'Controller');
	
	class MembersController extends AppController{
		public $uses = array('Account');

		public function login(){
			$this->set('title_for_layout', 'Đăng nhập');
        	if($this->Auth->user()) return $this->redirect($this->Auth->redirectUrl());
        	if($this->request->is('post')){
        		
				if($this->Auth->login())
				{
					pr($this->Auth->user());die;
					return $this->redirect($this->Auth->redirectUrl($this->Auth->loginRedirect));
				}
				else
				{
					
					$this->Session->setFlash('Thông tin đăng nhập không chính xác. Xin hãy thử lại.','default',array('class'=>'alert alert-danger'));
				}
			}

		}

		public function logout(){
			$this->redirect($this->Auth->logout());
		}

		public function register(){
			$this->set('title_for_layout', 'Đăng kí tài khoản');
			if($this->request->is('post')||$this->request->is('put')){
				$Data_Form=$this->request->data;
				// pr($this->request->data);die;
				$Data_Form['Account']['login_password']=$Data_Form['Account']['original_password'];
				$Data_Form['Account']['username']=$Data_Form['Account']['nickname'];
				$Data_Form['Account']['password']=$Data_Form['Account']['original_password'];
				// $Data_Form['Account']['original_password']=$Data_Form['Account']['original_password'];
				$Data_Form['Account']['login_id']=$Data_Form['Account']['nickname'];
				$this->Account->set($Data_Form['Account']);
				// var_dump($this->Account->validates());die;				
				// pr($Data_Form);
    			if ($this->Account->validates()) {
					if($this->Account->save($Data_Form)){
						$this->redirect(array('action'=>'login'));
					}
				}
				// else{
				// 	$errors = $this->Account->validationErrors;
				// 	pr($errors);die;
				// }

			}
		}

		public function forgetpass(){

		}

	}
?>