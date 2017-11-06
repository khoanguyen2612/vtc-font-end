<?php 
class LocationController extends AppController{

	public $uses = array('LocationOrder');
	public $components = array('Session');
	public function index(){
		$this->set('title_for_layout', 'Dịch vụ thuê chỗ đặt máy chủ');
	}

	public function submit_info($pack_id = null){
		$this->set('title_for_layout', 'Nhập thông tin');
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
					'package_order' =>$pack_id
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
}