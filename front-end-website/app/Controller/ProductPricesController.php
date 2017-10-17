<?php 
	class ProductPricesController extends AppController
	{	
		public $use = array
		(
			'ProductPrice',
		);
		
		public function ResultSearch() 
		  {
		 //  	
			$data=$this->ProductPrice->find('all');
			$this->set('data',$data);
			if($this->request->is('post'))
			{
				$request = ($this->request->data);
				$prod_name=$this->ProductPrice->find('first',array(
					'conditions'=> array('ProductPrice.id'=>$request['product_id'])));
				$request['search']=$request['search'].$prod_name['ProductPrice']['product_name'];
				$this->set('prod_name',$prod_name);
				$this->set('request',$request);

// -----------------------------------------------------------------------------------------------------------------------------------
				$Login = array("email" => "phuongnt6@vtc.vn", "password" => "Phuongnt6");
				$ch = curl_init("https://dms.inet.vn/api/sso/v1/user/signin");

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($Login));

				$output = curl_exec($ch);
				$output = json_decode($output, true);
				$token =  ($output['session']['token']);
				curl_close($ch);
// --------------------------------------------------------------------------------------------------------------------------------------
				$checkDomain = array(  "name" => $request['search'], "registrar" => "inet");
	
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

			}
		}
        public function RegisterDomain()
        {
        	$data=$this->ProductPrice->find('all');
			$this->set('data',$data);
			
        	if($this->request->is('post'))
        	{
        		$request = ($this->request->data);
				//echo $request['add-domain'];
				$this->set('request',$request);	

//-------------------------------------------------------------------------------------------------------------------------------------
				
				$data1=$this->ProductPrice->find('all');
				$this->set('data1',$data1);
				$i=0;
				foreach($data1 as $item)
				{
					$test = $request['add-domain'].$item['ProductPrice']['product_name'];

					
//--------------------------------------------------------------------------------------------------------------------------------------
					$Login = array("email" => "phuongnt6@vtc.vn", "password" => "Phuongnt6");
					$ch = curl_init("https://dms.inet.vn/api/sso/v1/user/signin");

					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($Login));

					$output = curl_exec($ch);
					$output = json_decode($output, true);
					$token =  ($output['session']['token']);
					curl_close($ch);
					
//------------------------------------------------------------------------------------------------------------------------------------------


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

        	}

        }
	}

?>


