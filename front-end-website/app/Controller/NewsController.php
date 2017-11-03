<?php 
	class NewsController extends AppController
	{
		public $helpers = array('Paginator','Html');
		//public $paginate = array();
		public $use = array
				(
					'News',
				);
		
		public function News_menulist()
		{

			$top_new=$this->News->find('all', array(
				'order' => array( 'id' => 'DESC' ),
				'limit' => 1,
			));
			//pr($top_new); die;
			$this->set('top_new',$top_new);
			$this->Paginator->settings = array(
				'conditions' => array( 'new_news_flg LIKE' => "0" ),
				'order' => array( 'id' => 'DESC' ),
				'limit' => 4,
			);
			$data = $this->Paginator->paginate('News');
			$this->set(compact('data'));
		}
		public function Notificion_maintain(int $id = null)
		{
			$data=$this->News->find('all', array(
				'conditions' => array( 'id LIKE' => "$id" )
			));
			$this->set('data',$data);
		}

	}


 ?>