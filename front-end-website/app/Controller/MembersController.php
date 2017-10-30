<?php
	App::uses('AppController', 'Controller');
	App::uses('CakeEmail', 'Network/Email');
	
	class MembersController extends AppController{
		public $uses = array('Account','Organization');
		public $components = array('Email');

		public function login($token=null){
			$this->set('title_for_layout', 'Đăng nhập');
        	if($this->Auth->user()) return $this->redirect($this->Auth->redirectUrl());

        	if($this->request->is('post')){
        		$nickname=$this->request->data['Account']['nickname'];
				$user=$this->Account->find('first',array('conditions'=>array('Account.nickname'=>$nickname)));
				// pr($user);die;
				if(!empty($user)){
					if($user['Account']['status']==1){
						if($this->Auth->login())
						{
							// pr($this->Auth->user());die;
							return $this->redirect($this->Auth->redirectUrl($this->Auth->loginRedirect));
						}
						else
						{
							
							$this->Session->setFlash('Mật khẩu không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger'));
						}
					}
					else{
						$this->Session->setFlash('Tài khoản này chưa được kích hoạt','default',array('class'=>'alert alert-danger'));
					}
				}
				else{
					$this->Session->setFlash('Tài khoản không đúng, vui lòng thử lại!','default',array('class'=>'alert alert-danger'));
				}
			}
			if(!empty($token)){
	            $u=$this->Account->findBytokenhash($token);
	            if($u){
	            	$this->Account->id=$u['Account']['id'];
	            	$this->Account->saveField('status',1);
	            	$this->Session->setFlash('Tài khoản của bạn đã được kích hoạt, vui lòng đăng nhập','default',array('class'=>'alert alert-success'));
					return $this->redirect(array('controller'=>'members','action'=>'login'));

	            }
		    }


		}

		public function logout(){
			$this->redirect($this->Auth->logout());
		}


		public function register(){
			$this->set('title_for_layout', 'Đăng kí tài khoản');
        	if($this->Auth->user()) return $this->redirect($this->Auth->redirectUrl());
			if($this->request->is('post')){
				$Data_Form=$this->request->data;


				$Data_Form['Account']['login_password']=$Data_Form['Account']['original_password'];
				$Data_Form['Account']['login_id']=$Data_Form['Account']['nickname'];

				if(isset($Data_Form['Account']['organ_name'])){
					$Data_Form['Organization']['organ_name']=$Data_Form['Account']['organ_name'];
					$Data_Form['Account']['proxy']=1;
					$this->Account->set($Data_Form['Account']);
					$this->Organization->set($Data_Form['Organization']);
				}else{
					$this->Account->set($Data_Form['Account']);
				}
				// pr($Data_Form);die;
				// ---------------------------------
				if(isset($Data_Form['Organization'])){
	    			if ($this->Account->validates()) {

						$key=sha1($Data_Form['Account']['email'].rand(0,100));
	                    $url = Router::url( array('controller'=>'members','action'=>'login'), true ).'/'.$key;
	                    $ms=$url;
                    	$ms=wordwrap($ms,1000);
                   		$Data_Form['Account']['tokenhash']=$key;

						$this->Account->save($Data_Form);
						$Data_Form['Organization']['account_id']=$this->Account->id;
						$this->Organization->save($Data_Form);

						//send mail--------------
							$Messages="Chào bạn ".$Data_Form['Account']['nickname'].", - Vui lòng click vào địa chỉ bên dưới để kích hoạt tài khoản:".$ms;
							$mess_success="Vui lòng truy cập email để kích hoạt tài khoản của bạn";
							$mess_error="Đã có lỗi, vui lòng thử lại";
							$Email = new CakeEmail('default');
							$Email->from(array('vtvtest1@gmail.com' => 'VTC'));
							$Email->to($Data_Form['Account']['email']);
							$Email->subject('Thông báo kích hoạt tài khoản');
							
							if($Email->send($Messages)){
							    $this->Session->setFlash($mess_success,'default',array('class'=>'alert alert-success'));
							    return $this->redirect(array('controller'=>'members','action'=>'login'));
							}
							else  {
							    $this->Session->setFlash($mess_error,'default',array('class'=>'alert alert-danger'));
							}
							
					}

				}
				elseif ($this->Account->validates()) {

						$key=sha1($Data_Form['Account']['email'].rand(0,100));
	                    $url = Router::url( array('controller'=>'members','action'=>'login'), true ).'/'.$key;
	                    $ms=$url;
                  		$ms=wordwrap($ms,1000);
                   		$Data_Form['Account']['tokenhash']=$key;

						$this->Account->save($Data_Form);

						//send mail--------------
							$Messages="Chào bạn ".$Data_Form['Account']['nickname'].", - Vui lòng click vào địa chỉ bên dưới để kích hoạt tài khoản: 
							".$ms;
							$mess_success="Vui lòng truy cập email để kích hoạt tài khoản của bạn";
							$mess_error="Đã có lỗi, vui lòng thử lại";
							$Email = new CakeEmail('default');
							$Email->from(array('vtvtest1@gmail.com' => 'VTC'));
							$Email->to($Data_Form['Account']['email']);
							$Email->subject('Thông báo kích hoạt tài khoản');
							
							if($Email->send($Messages)){
							    $this->Session->setFlash($mess_success,'default',array('class'=>'alert alert-success'));
							    return $this->redirect(array('controller'=>'members','action'=>'login'));
							}
							else  {
							    $this->Session->setFlash($mess_error,'default',array('class'=>'alert alert-danger'));
							}

				}
			}
		}

		public function forgetpass(){
			$this->set('title_for_layout', 'Khôi phục tài khoản');
			if($this->request->is('post')){

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
						$Email->from(array('vtvtest1@gmail.com' => 'VTC'));
						$Email->to($email);
						$Email->subject('Xác nhận lại mật khẩu');

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
		                $this->Session->setFlash('Email xác nhận đã hết hạn hoặc mã số sai, xin vui lòng gửi yêu cầu một lần nữa.','default',array('class'=>'alert alert-danger'));
		            }
		        }
		        else{
		            $this->Session->setFlash('ERROR! ','default',array('class'=>'alert alert-danger'));
		            $this->redirect($this->referer());
		        }
		}	
		public function profile_group(){

			$user=$this->Account->find('first', array('conditions' => ['Account.id'=>$this->Auth->user('id')], ));
			// pr($user);die;			
			$this->set('user',$user);
			if($this->request->is('post')){
				$this->Account->create();

				if(!empty($this->request->data['Account']['avatar']['name'])){
					$Image=$this->request->data['Account']['avatar']['name'];
					$Image=sha1($this->request->data['Account']['avatar']['name'].rand(0,100)).'-'.$Image;
					$filename = WWW_ROOT. 'uploads/images'.DS.$Image; 
					$tmp_name=$this->request->data['Account']['avatar']['tmp_name'];
					$this->request->data['Account']['avatar']=$Image;
				}
				else{
					unset($this->request->data['Account']['avatar']);
				}

				$this->request->data['Account']['id']=$user['Account']['id'];
				$this->request->data['Account']['status']=1;

				$this->request->data['Organization']['id']=$user['Organization']['id'];
				$this->request->data['Organization']['organ_name']=$this->request->data['Account']['organ_name'];
				if(isset($this->request->data['Account']['tax_code'])){$this->request->data['Organization']['tax_code']=$this->request->data['Account']['tax_code'];}
				if(isset($this->request->data['Account']['phonenumber2'])){$this->request->data['Organization']['phonenumber2']=$this->request->data['Account']['phonenumber2'];}
				if($this->request->data['Account']['email']==$user['Account']['email']){unset($this->request->data['Account']['email']);}
				// pr($this->request->data);die;
					$this->Account->set($this->request->data['Account']);
					$this->Organization->set($this->request->data['Organization']);

				if ($this->Account->validates()){
					$this->Account->save($this->request->data);
					$this->Organization->save($this->request->data);
					if(isset($filename)){
						move_uploaded_file($tmp_name,$filename);
					}
					$this->Session->setFlash('Thông tin Tài khoản của bạn đã được thay đổi','default',array('class'=>'alert alert-success'));
		            $this->redirect(array('controller'=>'members','action'=>'profile_group'));
				}

			}

		}
		public function profile_user(){
			$user=$this->Account->find('first', array('conditions' => ['Account.id'=>$this->Auth->user('id')], ));
			$this->set('user',$user['Account']);
			if($this->request->is('post')){
				$this->Account->create();
				// pr($this->request->data);die;

				if(!empty($this->request->data['Account']['avatar']['name'])){
					$Image=$this->request->data['Account']['avatar']['name'];
					$Image=sha1($this->request->data['Account']['avatar']['name'].rand(0,100)).'-'.$Image;
					$filename = WWW_ROOT. 'uploads/images'.DS.$Image; 
					$tmp_name=$this->request->data['Account']['avatar']['tmp_name'];
					$this->request->data['Account']['avatar']=$Image;
				}
				else{
					unset($this->request->data['Account']['avatar']);
				}
				$this->request->data['Account']['id']=$user['Account']['id'];
				$this->request->data['Account']['status']=1;

				unset($this->request->data['Account']['nickname']);
				if($this->request->data['Account']['email']==$user['Account']['email']){unset($this->request->data['Account']['email']);}

				if($this->Account->save($this->request->data)){
					if(isset($filename)){
	          			move_uploaded_file($tmp_name,$filename);
	          		}
					$this->Session->setFlash('Thông tin Tài khoản của bạn đã được thay đổi','default',array('class'=>'alert alert-success'));
		            $this->redirect(array('controller'=>'members','action'=>'profile_user'));
				}

			}

		}
		// public function filedemo(){
		// 		$whois = array("domainName" => "thang.com");
		// 		$ch = curl_init("https://dms.inet.vn/api/public/whois/v1/whois/directly");

		// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// 		curl_setopt($ch, CURLOPT_POST, true);
		// 		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($whois));

		// 		$data = curl_exec($ch);
		// 		$data = json_decode($data, true);
		// 		pr($data);die;

		// 		$this->set('data',$data);
		// }
	}
?>