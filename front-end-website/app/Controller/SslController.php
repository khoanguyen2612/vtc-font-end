<?php
	App::uses('AppController', 'Controller');

	class SslController extends AppController{

		public $uses = array('ProductPrice','SslContact');
				
		public function index()
		{
			$data=$this->ProductPrice->find('all', array( 'conditions' => array('product_type LIKE' => "6" ) ));
			
			$this->set('data',$data);
		}

		public function register(){
			$ssl=$this->ProductPrice->find('all', array('conditions' => array('ProductPrice.product_type' => "6" ) ));
			$this->set('ssl',$ssl);

			if($this->request->is('post')){
				// pr($this->request->data);die;
				if($this->SslContact->save($this->request->data)){
					$this->render('complete');
				}
				else{
					$this->Session->setFlash('Đăng kí chưa thành công, vui lòng nhập lại thông tin','default',array('class'=>'alert alert-danger'));
				}
			}
		}

	}

?>