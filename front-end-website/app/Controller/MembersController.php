<?php
	App::uses('AppController', 'Controller');
	App::uses('CakeEmail', 'Network/Email');
	
	class MembersController extends AppController{
		public $uses = array('Account');
		public $components = array('Email');

		public function login(){
			$this->set('title_for_layout', 'Đăng nhập');
        	if($this->Auth->user()) return $this->redirect($this->Auth->redirectUrl());
        	if($this->request->is('post')){
        		
				if($this->Auth->login())
				{
					// pr($this->Auth->user());die;
					return $this->redirect($this->Auth->redirectUrl($this->Auth->loginRedirect));
				}
				else
				{
					
					$this->Session->setFlash('Thông tin đăng nhập không chính xác. Xin hãy thử lại.','default',array('class'=>'alert alert-danger'));
				}
			}

		}

		public function logout(){
			$this->redirect($this->Auth->logout());
		}

		public function register(){
			$this->set('title_for_layout', 'Đăng kí tài khoản');

        	if($this->Auth->user()) return $this->redirect($this->Auth->redirectUrl());
			if($this->request->is('post')||$this->request->is('put')){

				// pr($this->request->data);die;
				$Data_Form=$this->request->data;
				$Data_Form['Account']['sex'] =$Data_Form['sex'];
				$Data_Form['Account']['domain_flg'] =$Data_Form['domain_flg'];
				$Data_Form['Account']['domain_news_flg'] =$Data_Form['domain_news_flg'];
				$Data_Form['Account']['login_password']=$Data_Form['Account']['original_password'];
				// $Data_Form['Account']['username']=$Data_Form['Account']['nickname'];
				// $Data_Form['Account']['password']=$Data_Form['Account']['original_password'];
				// $Data_Form['Account']['original_password']=$Data_Form['Account']['original_password'];
				$Data_Form['Account']['login_id']=$Data_Form['Account']['nickname'];
				$this->Account->set($Data_Form['Account']);
    			if ($this->Account->validates()) {
					if($this->Account->save($Data_Form)){
						$this->redirect(array('action'=>'login'));
					}
				}
				

			}
		}

		public function forgetpass(){
			$this->set('title_for_layout', 'Khôi phục tài khoản');
			if($this->request->is('post')){
				// $useremail=$this->request->data['Send_mail'];
				// $Email = new CakeEmail();
				// $Email->transport('gmail');


				// $Email->config('gmail')
				// 		->from($useremail)        
				// 		->to('buithidieu10021996@mail.com')
				// 		->subject('Contact');
				// if($Email->send('abc')){
				//     $this->Session->setFlash('Mail sent','default',array('class'=>'alert alert-success'));
				//     return $this->redirect(array('controller'=>'members','action'=>'login'));
				// }
				// else  {
				//     $this->Session->setFlash('Problem during sending email','default',array('class'=>'alert alert-warning'));
				// }

				// pr($this->request->data);die;

				$email=$this->request->data['Send_mail']['email'];
				$user=$this->Account->find('first',array('conditions'=>array('Account.email'=>$email)));
				if(!empty($user)){

					// $key = uniqid();
					$key=sha1($user['Account']['email'].rand(0,100));
                                //create the url with the reset function
                    $url = Router::url( array('controller'=>'members','action'=>'reset_pass'), true ).'/'.$key;
                    $ms=$url;
                    $ms=wordwrap($ms,1000);
                    // pr($key);die;
                    $user['Account']['tokenhash']=$key;
                    // pr($user);die;
                    $this->Account->id=$user['Account']['id'];
                    if($this->Account->saveField('tokenhash',$user['Account']['tokenhash'])){
                 		// die;
						$Messages="Chào bạn ".$user['Account']['nickname'].", - Vui lòng click vào địa chỉ bên dưới để thay đổi mật khẩu: 
						".$ms;
						$mess_success="Vui lòng truy cập vào email của bạn để xác nhận lại tài khoản";
						$mess_error="Đã có lỗi, vui lòng thử lại";
						$Email = new CakeEmail('default');
						$Email->from(array('buithidieu10021996@gmail.com' => 'Bùi Thị Diệu'));
						$Email->to($email);
						$Email->subject('Xác nhận lại mật khẩu');
						// $Email->template ('resetpw');
						// $Email->emailFormat('html');

						// pr($Email);die;
						if($Email->send($Messages)){
						    $this->Session->setFlash($mess_success,'default',array('class'=>'alert alert-success'));
						    return $this->redirect(array('controller'=>'members','action'=>'login'));
						}
						else  {
						    $this->Session->setFlash($mess_error,'default',array('class'=>'alert alert-danger'));
						}
					}
				}
				else{

                    $this->Session->setFlash('Bạn đã nhập sai Email, vui lòng nhập lại','default',array('class'=>'alert alert-danger'));
                
				}
			}
		}
		public function reset_pass($token=null){
			
			$this->Account->recursive=-1;
		        if(!empty($token)){
		            $u=$this->Account->findBytokenhash($token);
		            // pr($u);die;
		            if($u){
		                
  
		                    $new_hash=sha1($u['Account']['email'].rand(0,100));
		                    $u['Account']['tokenhash']=$new_hash;

		                    if($this->request->is('post')){
		                    	
			                    $this->request->data['Account']['login_password']=$this->request->data['Account']['original_password'];
			                    $this->request->data['Account']['tokenhash']=$new_hash;
			                    
			                    $this->request->data['Account']['id']=$u['Account']['id'];

			                    
			                    if($this->Account->save($this->request->data)){
									$this->Session->setFlash('Mật khẩu đã được thay đổi, Hãy đăng nhập bằng mật khẩu mới','default',array('class'=>'alert alert-success'));
		                            $this->redirect(array('controller'=>'members','action'=>'login'));
								}

			                }

		               
		            }
		            else
		            {
		                $this->Session->setFlash('Token Corrupted,,Please Retry.the reset link work only for once.');
		            }
		        }
		        else{
		            $this->Session->setFlash('error','default',array('class'=>'alert alert-danger'));
		            $this->redirect($this->referer());
		        }
		}	
	}
?>