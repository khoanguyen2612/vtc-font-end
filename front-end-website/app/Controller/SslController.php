<?php
	App::uses('AppController', 'Controller');

	class SslController extends AppController{

		public $uses = array('ProductPrice','ServiceRequest');
				
		public function index()
		{
			$data=$this->ProductPrice->find('all', array( 'conditions' => array('product_type LIKE' => "6" ) ));
			
			$this->set('data',$data);
		}

		public function register(){
			$ssl=$this->ProductPrice->find('all', array('conditions' => array('ProductPrice.product_type' => "6" ) ));
			$this->set('ssl',$ssl);
			$a=$this->ServiceRequest->find('all');
			// pr($a);die;
			if($this->request->is('post')){
				$this->request->data['ServiceRequest']['order_type']=3;
				pr($this->request->data);
				if($this->ServiceRequest->save($this->request->data)){
					$this->render('complete');
				}
				else{
					$this->Session->setFlash('Đăng kí chưa thành công, vui lòng nhập lại thông tin','default',array('class'=>'alert alert-danger'));
				}
			}
		}

	}

?>