<?php
App::uses('Component', 'Controller');
class LoginAccountComponent extends Component {
    var $components = array('Auth','Session');

    public function startup(Controller $controller) {
		$this->Controller = $controller;
	}

    public function remember_account($data){
    	$Account = ClassRegistry::init('Account');
    	$nickname=$data['Account']['nickname'];
								$user=$Account->find('first',array('conditions'=>array('Account.nickname'=>$nickname)));
								if(!empty($user)){
									if($user['Account']['status']==1){
										$year =  time() + 86400;
							            if(!empty($data['Account']['remember'])) {
							                setcookie('username', $data['Account']['nickname'], $year);
							                setcookie('passwd', $data['Account']['login_password'], $year);
							                setcookie('remember', $data['Account']['remember'], $year);
							            }else{
							                unset($_COOKIE['username']);
							                unset($_COOKIE['passwd']);
							                unset($_COOKIE['remember']);
							                setcookie('username', null, -1);
							                setcookie('passwd', null, -1);
							                setcookie('remember', null, -1);
							            }
										if($this->Auth->login())
										{
											$this->Session->delete('fail');
											return $this->Controller->redirect(array('controller'=>'home','action'=>'index'));
										}
										else
										{
											$_SESSION['fail']++;
											$this->Session->setFlash('Tài khoản không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger'));
										}
									}
									else{
										$_SESSION['fail']++;
										$this->Session->setFlash('Tài khoản này chưa được kích hoạt, vui lòng vào mail đăng ký tài khoản để kích hoạt','default',array('class'=>'alert alert-danger'));
									}
								}
								else{
									unset($_COOKIE['username']);
					                unset($_COOKIE['passwd']);
					                unset($_COOKIE['remember']);
					                setcookie('username', null, -1);
					                setcookie('passwd', null, -1);
					                setcookie('remember', null, -1);
					                $_SESSION['fail']++;
									$this->Session->setFlash('Tài khoản không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger'));
								}
    }

}