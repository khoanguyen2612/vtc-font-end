<?php
	/**
	* 
	*/

	App::uses('AppController', 'Controller');
	class CloudserversController extends AppController{


        public $uses = array('Plan','Productprice');
        // public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');


		public function index(){
			$plan= $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>0),
	            ));
			// pr($plan);die;
			$best_seller=1;
			$this->set('data',$plan);
			$this->set('best_seller',$best_seller);

		}

		public function price_hdd(){
			$this->layout = 'ajax';
			// var_dump($this->requset->data);die;
			// $arr = $this->request->data['arr'];

			// foreach ($arr as $key => $id) {
			// 	echo $id;
			// }die;

			$plans = $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>0),
            ));
            // pr($plans);die();

			$data=$this->Productprice->find('all',array(
				'conditions' =>array('Productprice.product_type'=>5)
			));
			$arr=array();
			foreach ($plans as $key => $plan) {
				$hdd=$this->request->data['hdd']+$plans[$key]['Plan']['hdd'];
				$price=0;
				foreach ($data as $item) {
					if($hdd>$item['Productprice']['start_hdd']){
						if(!empty($item['Productprice']['end_hdd'])){
							if($hdd<=$item['Productprice']['end_hdd']){
								$item['price_hdd']=($hdd-$item['Productprice']['start_hdd'])*$item['Productprice']['price']/10;
							}
							else{
								$item['price_hdd']=($item['Productprice']['end_hdd']-$item['Productprice']['start_hdd'])*$item['Productprice']['price']/10;
							}
						}
						else{
							$item['price_hdd']=($hdd-$item['Productprice']['start_hdd'])*$item['Productprice']['price']/10;
						}
					}
					else{
						$item['price_hdd']=0;
					}
					// pr($item['price_hdd']);
					$price=$price+$item['price_hdd'];
					// pr($item);
				}
				// $arr[count($arr)]=$price+$plan['Productprice']['except_hdd'];
				$plans[$key]['Productprice']['price'] =  $price+$plan['Productprice']['except_hdd'];

			
			}

			$this->set('data',$plans);
			$best_seller=1;
			$this->set('best_seller',$best_seller);
			$this->set('hdd_hdd',$this->request->data['hdd']);
			// pr($arr);
			// die;



		}
	}