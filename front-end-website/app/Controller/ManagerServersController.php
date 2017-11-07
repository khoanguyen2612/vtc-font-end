<?php 
App::uses('AppController', 'Controller');
class ManagerServersController extends AppController{

	public $uses = array('Orderforeignservice');
	public $components = array('Session');

	public function index(){
		$this->set('title_for_layout','Dịch vụ quản trị cloud server');
	}

	public function submit_info($pack_id = null){
		$this->set('title_for_layout','Điền thông tin liên hệ');
		if($this->request->is('post')){
			$this->Orderforeignservice->set($this->request->data);
			if($this->Orderforeignservice->validates()){
				$this->data = array(
					'name' => $this->request->data['Orderforeignservice']['name'],
					'birthday' => $this->request->data['Orderforeignservice']['birth'],
					'CMND' => $this->request->data['Orderforeignservice']['cmnd'],
					'phone' => $this->request->data['Orderforeignservice']['phone'],
					'email' => $this->request->data['Orderforeignservice']['email'],
					'address' => $this->request->data['Orderforeignservice']['addr'],
					'package_order' =>$pack_id,
					'order_type' => 2
				);
				if($this->Orderforeignservice->save($this->data)){
					$this->Session->setFlash(__('Yêu cầu của bạn đã được gửi,chúng tôi sẽ liên hệ lại theo số điện thoại bạn đã đăng ký'));
					return $this->redirect(array('action'=>'index'));
				}
			}else{
				$this->set('validationErrors',$this->Orderforeignservice->validationErrors);
			}
		}	
	}

}
?>