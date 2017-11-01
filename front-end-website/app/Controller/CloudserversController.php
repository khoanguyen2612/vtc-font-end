<?php
	/**
	* 
	*/
	use Cake\View\View;
	App::uses('AppController', 'Controller');
	class CloudserversController extends AppController{


        public $uses = array('Plan','Productprice');
        // public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');


		public function index(){
			$planl= $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>0),
	            ));
			// pr($plan);die;
			$best_seller=1;
			$this->set('datal',$planl);
			$this->set('best_seller',$best_seller);
			$planw= $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>1),
	            ));
			$this->set('dataw',$planw);
		}

		public function price_hdd(){
			$this->layout = 'ajax';
			$planls = $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>0),
            ));
            $planws = $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>1),
            ));

			$data=$this->Productprice->find('all',array(
				'conditions' =>array('Productprice.product_type'=>5)
			));
			foreach ($planls as $key => $planl) {
				$hdd=$this->request->data['hdd']+$planls[$key]['Plan']['hdd'];
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

					$price=$price+$item['price_hdd'];

				}

				$planls[$key]['Productprice']['price'] =  $price+$planl['Productprice']['except_hdd'];

			
			}

			$best_seller=1;

			foreach ($planws as $key => $planw) {
				$hdd=$this->request->data['hdd']+$planws[$key]['Plan']['hdd'];
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

					$price=$price+$item['price_hdd'];

				}

				$planws[$key]['Productprice']['price'] =  $price+$planw['Productprice']['except_hdd'];
				// pr($planws[$key]['Productprice']['price']);

			
			}
			if(isset($this->request->data['linux'])){$this->set('linux',$this->request->data['linux']);}
			$this->set('datal',$planls);
			$this->set('best_seller',$best_seller);
			$this->set('hdd_hdd',$this->request->data['hdd']);
			$this->set('dataw',$planws);

		}
	}