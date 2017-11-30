<?php 
	include_once ('../Config/constants.php');
	class ProductPricesController extends AppController
	{	
		public $use = array
		(
			'ProductPrice',
		);

		//use helper for Javascript && Session cart //
		//tue.phpmailer@gmail.com //
		/*****************************/
        public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');

        public function result_search()
		{	
			//truy vấn domain phổ biến
			$domain_common=$this->ProductPrice->find('all', 
				array(
				 'conditions' => array( 
				 	'product_type LIKE' => "1",
				 	'domain_common LIKE' => "1"
				 )
			));
			//truy vấn domain quốc tế
			$domain_international=$this->ProductPrice->find('all', 
				array(
				 'conditions' => array( 
				 	'product_type LIKE' => "1",
				 	'domain_type LIKE' => "0"
				 )
			));
			//truy vấn domain việt nam
			$domain_vn=$this->ProductPrice->find('all', 
				array(
				 'conditions' => array( 
				 	'product_type LIKE' => "1",
				 	'domain_type LIKE' => "1"
				 )
			));
			//pr($domain_vn);die;
			$this->set('domain_common',$domain_common);
			$this->set('domain_international',$domain_international);
			$this->set('domain_vn',$domain_vn);

			
			//-----------------------------------------------------------------------
						$Login = array("email" => INET_API_USERNAME, "password" => INET_API_PASSWORD);

						//pr($Login); die;
						$ch = curl_init("https://dms.inet.vn/api/sso/v1/user/signin");

						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($Login));

						$output = curl_exec($ch);
						$output = json_decode($output, true);
						$token =  ($output['session']['token']);

						curl_close($ch);

			if($this->request->is('post'))
			{
				$request = ($this->request->data);
				//pr($request);die;
				$arr = explode("\r\n", $request['search']);
				//pr($arr);
				$dem=0;
				$check_domain_name = array();
				$domain_common=$this->ProductPrice->find('all', array('conditions' => array( 'domain_common LIKE' => "1" )));

				for ($a = 0;$a<count($arr);$a++)
				{
					$check_domain_name[$a] = strstr( $arr[$a], '.' );
					//pr($check_domain_name);die;
					$check1 = '%'.$check_domain_name[$a].'%';

					if($check_domain_name[$a] == "")
					{
						for($i=0;$i<count($domain_common);$i++)
						{
							$request2[] = $arr[$a].$domain_common[$i]['ProductPrice']['product_name'];
						}

					};
					// if($check_domain_name != "" )
					// {
					// 	$request1 = $arr[$a];
					// 	$this->set('request1',$request1);
						
					// 	//-------------------------------------------------------------------------
					// 	$checkDomain = array(  "name" => $request1, "registrar" => "inet");
						
					// 	$data_string = json_encode($checkDomain);   

					// 	$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

					// 	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
					// 	//curl_setopt($ch, CURLOPT_POST, true);
					// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
					// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
					// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array
					// 		(                                                                          
					// 			'Content-Type:application/json; charset=UTF-8',  
					// 			'token: '.$token                                                                             
					// 	    )                                                                       
					// 	);       

					// 	$output1 = curl_exec($ch);
					// 	$outputdm[$a] = json_decode($output1, true);
					//  	curl_close($ch);
					// };
					
					// {
					// 	if(isset($request['id']))
					// 	{-
					// 		$prod_name=$this->ProductPrice->find('first',array(
					// 			'conditions'=> array('ProductPrice.id'=>$request['product_id'])));
					// 		$request2=$request['search'].$prod_name['ProductPrice']['product_name'];}


					// 			//--------------------------------------------------------------------------------
					// 			if(isset($request2)){
								
								
					// 			$checkDomain = array(  "name" => $request2, "registrar" => "inet");
					
					// 			$data_string = json_encode($checkDomain);   


					// 			$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

					// 			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
					// 			//curl_setopt($ch, CURLOPT_POST, true);
					// 			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
					// 			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
					// 			curl_setopt($ch, CURLOPT_HTTPHEADER, array
					// 				(                                                                          
					// 					'Content-Type:application/json; charset=UTF-8',  
					// 					'token: '.$token                                                                             
					// 			    )                                                                       
					// 			);       

					// 			$output = curl_exec($ch);
					// 			$output = json_decode($output, true);
					// 			$this->set('output',$output);
					// 		 	curl_close($ch);
					// 	} 
					// }
					$dem++;
					
				}
					//pr($request2[1]);
					pr($request2);
					count($domain_common);
					count($request2);
					
					//pr(count($request2));
					//pr(count($outputdm1));
					//pr($outputdm1);die;
					//$this->set('output',$outputdm);
				//pr($dem); die;
							// if(!isset($request2)){
							// 	$this->Session->setFlash('Bạn chưa chọn đuôi tên miền. Làm ơn chọn đuôi tên miền cần kiểm tra!','default',array('class'=>'alert alert-danger'));
							// }else{

							// 	$this->set('prod_name',$prod_name);
							// 	$this->set('request2',$request2);
							// }
					};
					//pr($dem);
					if(isset($dem)){
						$this->set('dem',$dem);
					}
					//pr($output);die;
					

		}
        public function register_domain()
		
        {
        	
        	$data=$this->ProductPrice->find('all', array(
				'conditions' => array( 'product_type LIKE' => "1" )
			));
			$this->set('data',$data);
			//LOGIN
				$Login = array("email" => INET_API_USERNAME, "password" => INET_API_PASSWORD);
				
				$ch = curl_init("https://dms.inet.vn/api/sso/v1/user/signin");

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($Login));

				$output = curl_exec($ch);
				$output = json_decode($output, true);
				$token =  ($output['session']['token']);
				curl_close($ch);
        	if($this->request->is('post'))
        	{

        		//pr($this->request->data);die;
        		if(isset($this->request->data['Data']))

	        		{
	        			$request = ($this->request->data['Data']);
	        			//pr($request); die;
	        			$check = strstr($request['add_doamin'], '.');
	        			$str = str_replace( $check, '', $request['add_doamin'] );
	        			$this->set('check',$check);
	        			        			
						if 
							(
								( $data=$this->ProductPrice->find('all', array('conditions' => array( 'product_name LIKE' => "$check%" ))) ) &&  ( $check != "") 
							) 
								{
									$data1=$this->ProductPrice->find('all');
									$this->set('data1',$data1);
									$request1 = $request['add_doamin'];
									$this->set('request1',$request1);
									//--------------------------------------------------------------------------
										$checkDomain = array(  "name" => $request1, "registrar" => "inet");
								
										$data_string = json_encode($checkDomain);   


										$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

										curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
										//curl_setopt($ch, CURLOPT_POST, true);
										curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
										curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
										curl_setopt($ch, CURLOPT_HTTPHEADER, array
											(                                                                          
												'Content-Type:application/json; charset=UTF-8',  
												'token: '.$token                                                                             
										    )                                                                       
										);       

										$output = curl_exec($ch);
										$output = json_decode($output, true);
										$this->set('output',$output);
									 	curl_close($ch);
									//------------------------------------------------------------
									 	$request3 = $str ;
										$this->set('request3',$request3);
									//------------------------------------------------------------
										$data1=$this->ProductPrice->find('all',array('conditions' => array( 'product_type LIKE' => "1" )));
										$this->set('data1',$data1);
										$i=0;
										foreach($data1 as $item)
										{
											$test = $str.$item['ProductPrice']['product_name'];
											//pr($test);die;
											//CHECK
											$checkDomain = array(  "name" => $test, "registrar" => "inet");
							
											$data_string = json_encode($checkDomain);   


											$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

											curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
											//curl_setopt($ch, CURLOPT_POST, true);
											curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
											curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
											curl_setopt($ch, CURLOPT_HTTPHEADER, array
												(                                                                          
													'Content-Type:application/json; charset=UTF-8',  
													'token: '.$token                                                                             
											    )                                                                       
											);       

											$output1 = curl_exec($ch);
											$output1 = json_decode($output1, true);
											$output2[$i]=$output1;

											$i++;
											

										 	
										}

										$this->set('output2',$output2);
										curl_close($ch);
						 		}
						else
								{
									$request2 = ($this->request->data['Data']) ;
									$this->set('request2',$request2);
									//------------------------------------------------------------
										$data1=$this->ProductPrice->find('all',array('conditions' => array( 'product_type LIKE' => "1" )));
										$this->set('data1',$data1);
										$i=0;
										
										foreach($data1 as $item)
										{
											$test = $request['add_doamin'].$item['ProductPrice']['product_name'];
											//pr($test); die;
											//CHECK
											$checkDomain = array(  "name" => $test, "registrar" => "inet");
							
											$data_string = json_encode($checkDomain);   


											$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

											curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
											//curl_setopt($ch, CURLOPT_POST, true);
											curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
											curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
											curl_setopt($ch, CURLOPT_HTTPHEADER, array
												(                                                                          
													'Content-Type:application/json; charset=UTF-8',  
													'token: '.$token                                                                             
											    )                                                                       
											);       

											$output = curl_exec($ch);
											$output = json_decode($output, true);
											$output1[$i]=$output;
											$i++;
											

										 	
										}

										$this->set('output1',$output1);
										curl_close($ch);
									//
								};

	        		}
        		else 
        			{
        				$request = ($this->request->data);
        				$check = strstr($request['add_doamin'], '.');
        				$str = str_replace( $check, '', $request['add_doamin'] );
        				$this->set('check',$check);

        				if 
							(
								( $data=$this->ProductPrice->find('all', array('conditions' => array( 'product_name LIKE' => "$check%" ))) ) &&  ( $check != "") 
							)
							{
									$data1=$this->ProductPrice->find('all',array('conditions' => array( 'product_type LIKE' => "1" )));
									$this->set('data1',$data1);
									$request1 = $request['add_doamin'];
									$this->set('request1',$request1);
									
									//--------------------------------------------------------------------------
										$checkDomain = array(  "name" => $request1, "registrar" => "inet");
								
										$data_string = json_encode($checkDomain);   


										$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

										curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
										//curl_setopt($ch, CURLOPT_POST, true);
										curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
										curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
										curl_setopt($ch, CURLOPT_HTTPHEADER, array
											(                                                                          
												'Content-Type:application/json; charset=UTF-8',  
												'token: '.$token                                                                             
										    )                                                                       
										);       

										$output = curl_exec($ch);
										$output = json_decode($output, true);
										$this->set('output',$output);
									 	curl_close($ch);
									 //------------------------------------------------------------------------------


									 	$request3 = $str ;
										$this->set('request3',$request3);
									//------------------------------------------------------------
										$data1=$this->ProductPrice->find('all',array(
											'conditions' => array( 'product_type LIKE' => "1" )
										));
										$this->set('data1',$data1);
										$i=0;
										foreach($data1 as $item)
										{
											$test = $str.$item['ProductPrice']['product_name'];
											//pr($test);die;
											//CHECK
											$checkDomain = array(  "name" => $test, "registrar" => "inet");
							
											$data_string = json_encode($checkDomain);   


											$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

											curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
											//curl_setopt($ch, CURLOPT_POST, true);
											curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
											curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
											curl_setopt($ch, CURLOPT_HTTPHEADER, array
												(                                                                          
													'Content-Type:application/json; charset=UTF-8',  
													'token: '.$token                                                                             
											    )                                                                       
											);       

											$output1 = curl_exec($ch);
											$output1 = json_decode($output1, true);
											$output2[$i]=$output1;

											$i++;
											

										 	
										}

										$this->set('output2',$output2);
										curl_close($ch);

							}
						else
							{
									$request2 = ($this->request->data); 
									//pr($request2); die;
									$this->set('request2',$request2);
									//------------------------------------------------------------
										$data1=$this->ProductPrice->find('all',array('conditions' => array( 'product_type LIKE' => "1" )));
										$this->set('data1',$data1);
										$i=0;
										foreach($data1 as $item)
										{
											$test = $request['add_doamin'].$item['ProductPrice']['product_name'];

											//CHECK
											$checkDomain = array(  "name" => $test, "registrar" => "inet");
							
											$data_string = json_encode($checkDomain);   


											$ch = curl_init("https://dms.inet.vn/api/rms/v1/domain/checkavailable");

											curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
											//curl_setopt($ch, CURLOPT_POST, true);
											curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");   
											curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
											curl_setopt($ch, CURLOPT_HTTPHEADER, array
												(                                                                          
													'Content-Type:application/json; charset=UTF-8',  
													'token: '.$token                                                                             
											    )                                                                       
											);       

											$output = curl_exec($ch);
											$output = json_decode($output, true);
											$output1[$i]=$output;
											$i++;
											

										 	
										}

										$this->set('output1',$output1);
										curl_close($ch);
									//
								};
        			}
        	}

        }

        public function whois_domain(){
        	if($this->request->is('post')){
        		$this->layout = 'ajax';
        		// pr($this->request->data);die;
        		$domain_name=$this->request->data['domain_name'];
				$whois = array("domainName" => $domain_name);
				$ch = curl_init("https://dms.inet.vn/api/public/whois/v1/whois/directly");

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($whois));

				$datadomain = curl_exec($ch);
				$datadomain = json_decode($datadomain, true);
				// pr($datadomain);die;
				$this->set('datadomain',$datadomain);
				curl_close($ch);
			}
		}

		public function domain_transfer()
		{

		}

    }
?>



