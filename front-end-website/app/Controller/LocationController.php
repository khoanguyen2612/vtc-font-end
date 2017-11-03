<?php 
class LocationController extends AppController{

	public $uses = array('LocationOrder','CoLocation');
	public $components = array('Session');
	public function index(){
		$CoLocation = $this->CoLocation->find('all');
		$this->set('location', $CoLocation);
		$this->set('title_for_layout', 'Dịch vụ thuê chỗ đặt máy chủ');
	}

	public function submit_info($pack_id = null){
		$this->set('title_for_layout', 'Nhập thông tin');
		$id = $this->CoLocation->find('all',array('fields' => array('id','name')));
		$order_package = $this->CoLocation->findById($pack_id);
		if(empty($order_package )){
			throw new NotFoundException(__('Không tìm thấy gói yêu cầu'));
		}else{
			$this->set('id',$id);
			$this->set('order_package',$order_package);
		}
		if($this->request->is('post')){
			$this->LocationOrder->set($this->request->data);
			if($this->LocationOrder->validates()){
				$this->data = array(
					'name' => $this->request->data['LocationOrder']['name'],
					'birthday' => $this->request->data['LocationOrder']['birth'],
					'CMND' => $this->request->data['LocationOrder']['cmnd'],
					'phone' => $this->request->data['LocationOrder']['phone'],
					'email' => $this->request->data['LocationOrder']['email'],
					'address' => $this->request->data['LocationOrder']['addr'],
					'co_location_id' => $this->request->data['id']
				);
				if($this->LocationOrder->save($this->data)){
					$this->Session->setFlash(__('Yêu cầu của bạn đã được gửi,chúng tôi sẽ liên hệ lại theo số điện thoại bạn đã đăng ký'));
					return $this->redirect(array('action'=>'index'));
				}
			}else{
				$this->set('validationErrors',$this->LocationOrder->validationErrors);
			}
		}	
	}

	function ajax(){
		if($this->request->is('post')){
			$result = $this->CoLocation->findById($_POST['id']);
			header('Content-Type: application/json');
			echo json_encode($result);
		}
		$this->autoRender = false;
	}
}