<?php 
	class DomainsController extends AppController
	{	
		public $use = array
		(
			'Domain',
		);
		
		public function ResultSearch() 
		  {
		  	$sql = "select * from product_price";
			$data = $this->Domain->query($sql);
			$this->set('data',$data);
			if($this->request->is('post'))
			{
				$request = ($this->request->data);
				$prod_name=$this->Domain->find('first',array(
					'conditions'=> array('Domain.id'=>$request['product_id'])));
				$request['search']=$request['search'].$prod_name['Domain']['product_name'];
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
        
	}

?>


