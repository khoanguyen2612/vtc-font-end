<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 * @property 'AclComponent $'Acl
 * @property SecurityComponent $Security
 * @property RequestHandler'Component $RequestHandler'
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class CkeditorController extends AppController {

	public $helpers = array('Text', 'Js', 'Time');
	var $uses = array('Staticpages');

	public $components = array('Paginator', 'Acl', 'Security', 'RequestHandler', 'Session', 'Flash');

	public function index() {
		$this->set('content',$this->Staticpages->find('all'));
	}

}
