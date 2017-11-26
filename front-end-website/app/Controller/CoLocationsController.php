<?php 
class CoLocationsController extends AppController{

	public $uses = array('ServiceRequest','Staticpages');

	public function index(){
		$this->set('title_for_layout', 'Dịch vụ thuê chỗ đặt máy chủ');
		$content = $this->Staticpages->find('all',array(
			'conditions'=>array('pagename'=>'location')));
		$this->set('content',$content);
		if($this->request->is('post')){
			if($this->Auth->user()){
						$user=$this->Auth->user();
									$data['ServiceRequest']=array(
										'order_type' => 1,
										'name' => $user['name'],
										'email' =>$user['email'],
										'phone' => $user['phonenumber'],
										'pack_id' => $this->request->data['pack_id']
									);
									if(!empty($user['Organization']['organ_name'])){
										$data['ServiceRequest']['company']=$user['Organization']['organ_name'];
									}
									if($this->ServiceRequest->save($data)){
										$this->render('complete');
									}
				}else{
					$this->Session->write('pack_id',$this->request->data['pack_id']);
					$this->redirect(array('action' => 'register'));
				}
		}
	}

	public function register(){
		$this->set('id',$this->Session->read('pack_id'));
		if($this->request->is('post')){
					if(isset($this->request->data['ServiceRequest'])){
						$this->request->data['ServiceRequest']['order_type']=1;
						$this->request->data['ServiceRequest']['package_order']=$this->request->data['colo_id'];
						if($this->ServiceRequest->save($this->request->data)){
							$this->render('complete');
						}
						else{
							$this->Session->setFlash('Đăng kí chưa thành công, vui lòng nhập lại thông tin','default',array('class'=>'alert alert-danger text-center'));
						}
					}
					elseif(isset($this->request->data['Account'])){
						$nickname=$this->request->data['Account']['nickname'];
						$user=$this->Account->find('first',array('conditions'=>array('Account.nickname'=>$nickname)));
						if(!empty($user)){
							if($user['Account']['status']==1){
								if($this->Auth->login()){
									$data['ServiceRequest']=array(
										'order_type' => 1,
										'package_order' => $this->request->data['colo_id'],
										'name' => $user['Account']['name'],
										'email' =>$user['Account']['email'],
										'phone' => $user['Account']['phonenumber']
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
									$this->Session->setFlash('Mật khẩu không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger text-center'));
								}
							}
							else{
								$this->Session->setFlash('Tài khoản này chưa được kích hoạt','default',array('class'=>'alert alert-danger text-center'));
							}
						}
						else{
							$this->Session->setFlash('Tài khoản không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger text-center'));
				}
			}
		}
	}
	// public function edit(){
	// 	$content = $this->Staticpages->find('all',array(
	// 		'conditions'=>array('pagename'=>'location')));
	// 	$this->set('content',$content);
	// 	if(isset($_POST['content'])){
	// 		$data = $_POST['content'];
	// 		var_dump($_POST);die;
	// 	}
	// }
}