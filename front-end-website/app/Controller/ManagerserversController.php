<?php 
App::uses('AppController', 'Controller');
class ManagerserversController extends AppController{

	public $uses = array('ServiceRequest','Staticpages');
	public $components = array('Session');

	public function index(){
		$content = $this->Staticpages->find('all',array(
			'conditions'=>array('pagename'=>'managerservers')));
		$this->set('content',$content);
		$this->set('title_for_layout','Dịch vụ quản trị cloud server');
	}

	public function edit(){
		$content = $this->Staticpages->find('all',array(
			'conditions'=>array('pagename'=>'managerservers')));

		$this->set('content',$content);
		if(isset($_POST['content'])){
			$data = $_POST['content'];
			var_dump($_POST);;die;
		}
		
	}

	public function submit_info($pack_id = null){
		$this->set('title_for_layout','Điền thông tin liên hệ');
		if($this->request->is('post')){
			$this->ServiceRequest->set($this->request->data);
			if($this->ServiceRequest->validates()){
				$this->data = array(
					'name' => $this->request->data['ServiceRequest']['name'],
					'birthday' => $this->request->data['ServiceRequest']['birth'],
					'CMND' => $this->request->data['ServiceRequest']['cmnd'],
					'phone' => $this->request->data['ServiceRequest']['phone'],
					'email' => $this->request->data['ServiceRequest']['email'],
					'address' => $this->request->data['ServiceRequest']['addr'],
					'package_order' =>$pack_id,
					'order_type' => 2
				);
				if($this->ServiceRequest->save($this->data)){
					$this->Session->setFlash(__('Yêu cầu của bạn đã được gửi,chúng tôi sẽ liên hệ lại theo số điện thoại bạn đã đăng ký'));
					return $this->redirect(array('action'=>'index'));
				}
			}else{
				$this->set('validationErrors',$this->ServiceRequest->validationErrors);
			}
		}	
	}

}
?>