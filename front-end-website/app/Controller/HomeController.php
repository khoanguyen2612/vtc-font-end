<?php
	/**
	* 
	*/
	class HomeController extends AppController{


        public $uses = array('Account', 'Cart','Hosting','Plan');
        public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');


		public function index(){
			$maxw=0;$maxl=0;
			$planw= $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>0),
	            'contain' => array(
	                'Hosting',
	                'Product'),
	            
	            ));
			$planl= $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>1),
	            'contain' => array(
	                'Hosting',
	                'Product'),
	            
	            ));
			$i=0;
            foreach ($planw as $item) {
            		if($maxw<=count($item['Hosting'])){
            			$maxw=count($item['Hosting']);
            			unset($item['Hosting']);
            			// $best_sellerw=$item;
            			$best_sellerw=$i;
            		}
            		$i++;
            }

            if($best_sellerw==0){
            	$cloud[0]=$planw[0];
            	$cloud[0]['best_seller']=1;
            	$cloud[1]=$planw[1];
            }else{
            	$cloud[0]=$planw[0];
            	$cloud[1]=$planw['best_sellerl'];
            	$cloud[1]['best_seller']=1;
            }
            // pr($cloud);die;
            $i=0;
            foreach ($planl as $item) {
            		if($maxl<=count($item['Hosting'])){
            			$maxl=count($item['Hosting']);
            			unset($item['Hosting']);
            			$best_sellerl=$i;
            		}
            		$i++;
            }
            if($best_sellerl==0){
            	$cloud[2]=$planl[0];
            	$cloud[2]['best_seller']=1;
            	$cloud[3]=$planl[1];
            }else{
            	$cloud[2]=$planl[0];
            	$cloud[3]=$planl['best_sellerl'];
            	$cloud[3]['best_seller']=1;
            }
            // pr($cloud);die;
            $this->set('cloud',$cloud);


        }

	}
?>