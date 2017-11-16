<?php 
App::uses('AppController', 'Controller');
class ManagerserversController extends AppController{

	public $uses = array('ServiceRequest','Staticpages');

	public function index(){
		$this->set('title_for_layout','Dịch vụ quản trị cloud server');
		$content = $this->Staticpages->find('all',array(
			'conditions'=>array('pagename'=>'managerservers')));
		$this->set('content',$content);
		if($this->request->is('post')){
			$this->redirect(array(
				'action' => 'submit_info',
				'package'=>$this->request->data['pack_id']
			));
		}
	}

	public function submit_info(){
		if(!isset($this->params['named']['package'])){
			$this->redirect(array('action'=>'index'));
		}
		if($this->request->is('post')){
			$this->ServiceRequest->set($this->data);
			if($this->ServiceRequest->validates()){
				$data = $this->data;
				$data['ServiceRequest']['order_type'] = 2;
				$data['ServiceRequest']['package_order'] = $this->params['named']['package'];
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
	// 		'conditions'=>array('pagename'=>'managerservers')));

	// 	$this->set('content',$content);
	// 	if(isset($_POST['content'])){
	// 		$data = $_POST['content'];
	// 		var_dump($_POST);;die;
	// 	}
		
	// }

}
?>