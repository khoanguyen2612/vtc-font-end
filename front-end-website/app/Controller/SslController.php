<?php
	App::uses('AppController', 'Controller');

	class SslController extends AppController{

		public $uses = array('ProductPrice','ServiceRequest','Account');
				
		public function index()
		{
			$data=$this->ProductPrice->find('all', array( 'conditions' => array('product_type LIKE' => "6" ) ));
			
			$this->set('data',$data);
			if($this->request->is('post')){
				if($this->Auth->user()){
						$user=$this->Auth->user();
									$data['ServiceRequest']=array(
										'order_type' => 3,
										'name' => $user['name'],
										'email' =>$user['email'],
										'phone' => $user['phonenumber'],
										'ssl_id' => $this->request->data['ssl_id']
									);
									if(!empty($user['Organization']['organ_name'])){
										$data['ServiceRequest']['company']=$user['Organization']['organ_name'];
									}
									if($this->ServiceRequest->save($data)){
										$this->render('complete');
									}
				}else{
					$this->register($this->request->data['ssl_id']);
				}
			}
		}

		public function register($id=null){
			if(!empty($id)){
				$this->set('ssl_id',$id);
				$ssl=$this->ProductPrice->find('all', array('conditions' => array('ProductPrice.product_type' => "6" ) ));
				$this->set('ssl',$ssl);
				$this->render('register');
			}
			else{
				$ssl=$this->ProductPrice->find('all', array('conditions' => array('ProductPrice.product_type' => "6" ) ));
				$this->set('ssl',$ssl);
				if($this->request->is('post')){
					if(isset($this->request->data['ServiceRequest'])){
						$this->request->data['ServiceRequest']['order_type']=3;
						$this->request->data['ServiceRequest']['ssl_id']=$this->request->data['ssl_id'];
						if($this->ServiceRequest->save($this->request->data)){
							$this->render('complete');
						}
						else{
							$this->Session->setFlash('Đăng kí chưa thành công, vui lòng nhập lại thông tin','default',array('class'=>'alert alert-danger'));
						}
					}
					elseif(isset($this->request->data['Account'])){
						$nickname=$this->request->data['Account']['nickname'];
						$user=$this->Account->find('first',array('conditions'=>array('Account.nickname'=>$nickname)));
						if(!empty($user)){
							if($user['Account']['status']==1){
								if($this->Auth->login()){
									$data['ServiceRequest']=array(
										'order_type' => 3,
										'name' => $user['Account']['name'],
										'email' =>$user['Account']['email'],
										'phone' => $user['Account']['phonenumber'],
										'ssl_id' => $this->request->data['ssl_id']
									);
									if(!empty($user['Organization']['organ_name'])){
										$data['ServiceRequest']['company']=$user['Organization']['organ_name'];
									}
									if($this->ServiceRequest->save($data)){
										$this->Auth->logout();
										$this->render('complete');
									}
								}
								else
								{
									$this->Session->setFlash('Mật khẩu không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger'));
								}
							}
							else{
								$this->Session->setFlash('Tài khoản này chưa được kích hoạt','default',array('class'=>'alert alert-danger'));
							}
						}
						else{
							$this->Session->setFlash('Tài khoản không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger'));
						}
					}
				}
			}
		}

	}

?>