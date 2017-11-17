<?php 
App::uses('AppController', 'Controller');
class DefineSslController extends AppController{

	public $uses = array('Staticpages');

	public function index(){
		$content = $this->Staticpages->find('all',array('conditions'=>array('pagename'=>'definessl')));
		$this->set('content',$content);
	}
}




 ?>