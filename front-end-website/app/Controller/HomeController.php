<?php
	/**
	* 
	*/
	class HomeController extends AppController{


        public $uses = array('Account', 'Cart','Hosting','Plan','News');
        public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');


		public function index(){
			$maxw=0;$maxl=0;
			$planw= $this->Plan->find('all',array(
				'conditions'=>array('Plan.linux_flg'=>0),
                        'limit'=>4,
	            
	            ));
                  $best_seller=1;
                  // pr($planw);die;
                  $this->set('best_seller',$best_seller);
                  $this->set('planw',$planw);

                  // Hiển thị tin tức trang trên Home 

                  $data=$this->News->find("all", array(
      				
      				'order' => array( 'id DESC'),
      				'limit' => 1,
      			));
      			
      			$this->set('data',$data);
              }

	}
?>