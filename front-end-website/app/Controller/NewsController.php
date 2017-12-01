<?php 
	class NewsController extends AppController
	{
		public $helpers = array('Paginator','Html');
		//public $paginate = array();
		public $use = array
				(
					'News',
				);
		
		public function news_menulist($data=null)
		{
			if(!empty($data)){
				$tab=0;
				if($data=='noti'){
					$tab=1;
				}
			}
			$this->set('tab',$tab);
			$top_new=$this->News->find('all', array(
				'conditions' => array( 'new_news_flg LIKE' => "0" ),
				'order' => array( 'id' => 'DESC' ),
				'limit' => 1,
			));
			//pr($top_new); die;
			$this->set('top_new',$top_new);
			//---------------------------------------
			$top_new1=$this->News->find('all', array(
				'conditions' => array( 'new_news_flg LIKE' => "1" ),
				'order' => array( 'id' => 'DESC' ),
				'limit' => 1,
			));
			//pr($top_new); die;
			$this->set('top_new1',$top_new1);
			//---------------------------------------
			$this->Paginator->settings = array(
				'conditions' => array( 'new_news_flg LIKE' => "0" ),
				'order' => array( 'id' => 'DESC' ),
				'limit' => 4,
			);
			$data = $this->Paginator->paginate('News');
			$this->set(compact('data'));

			//-----------------------------------------

			$this->Paginator->settings = array(
					'conditions' => array( 'new_news_flg LIKE' => "1" ),
					'order' => array( 'id' => 'DESC' ),
					'limit' => 4,
				);
				$data1 = $this->Paginator->paginate('News');
				$this->set(compact('data1'));
			}
		public function notificion_maintain($id = null)
		{
			$data=$this->News->find('all', array(
				'conditions' => array( 'id LIKE' => "$id" )
			));
			$this->set('data',$data);
		}

	}


 ?>