<?php 
class CoLocationsController extends AppController{

	public $uses = array('ServiceRequest','Staticpages');

	public function index(){
		$this->set('title_for_layout', 'Dịch vụ thuê chỗ đặt máy chủ');
		$content = $this->Staticpages->find('all',array(
			'conditions'=>array('pagename'=>'location')));
		$this->set('content',$content);
		if($this->request->is('post')){
			$this->redirect(array(
				'action' => 'submit_info',
				'colo'=>$this->request->data['pack_id']
			));
		}
	}

	public function submit_info(){
		$this->set('title_for_layout','Nhập Thông Tin');
		if(!isset($this->params['named']['colo'])){
			$this->redirect(array('action'=>'index'));
		}
		if($this->request->is('post')){
			$this->ServiceRequest->set($this->data);
			if($this->ServiceRequest->validates()){
				$data = $this->data;
				$data['ServiceRequest']['order_type'] = 1;
				$data['ServiceRequest']['package_order'] = $this->params['named']['colo'];
				if($this->ServiceRequest->save($data)){
					$this->Session->setFlash('Yêu cầu của bạn đã được gửi','default',array('class'=>'alert alert-info text-center'));
					return $this->redirect(array('action'=>'index'));
				}
			}else{	
				$this->set('validationErrors',$this->ServiceRequest->validationErrors);
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