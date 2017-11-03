<?php
	/**
	* 
	*/
	class HomeController extends AppController{


        public $uses = array('Account', 'Cart','Hosting','Plan','News','ProductPrice');
        public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');


		public function index()
    {
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

                  $notif=$this->News->find("all", array(
                        'conditions' => array( 'new_news_flg LIKE' => "1" ),
      				   				'order' => array( 'id DESC'),
                				'limit' => 4,
                			));
      			       $news=$this->News->find("all", array(
                        'conditions' => array( 'new_news_flg LIKE' => "0" ),
                        'order' => array( 'id DESC'),
                        'limit' => 4,
                      ));
      			     $this->set('notif',$notif);
                 $this->set('news',$news);
    }

	}
?>