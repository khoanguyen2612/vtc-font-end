<?php
    
    /******************************************************************************
     * tue.phpmailer@gmail.com                                                    *
     ******************************************************************************/
    
    App::uses('AppController' , 'Controller');
    App::uses('CakeTime' , 'Utility');
    
    /**
     * Storage Controller
     */
    class StorageController extends AppController
    {
        
        /**
         * Storage
         *
         * @var mixed
         */
        public $storage;
        
        public $uses = array('Product' , 'Cart' , 'Order' , 'OrderDetail');
        public $components = array('Acl' , 'RequestHandler');
        public $helpers = array('Html' , 'Form' , 'Js' => array('Jquery') , 'Session');
    
        
        function beforeFilter()
        {
            parent::beforeFilter();
            $this->_request_head_log();
        }
        
        /** before redict check login **/

        /***
            public function beforeRedirect()
            {
                parent::beforeRedirect('/storage/');

                $this->log_request_tail();
            }
        ***/
        
        public function afterFilter()
        {
            parent::afterFilter();
            
            $this->log_request_tail();
        }
    

        /*  index view  */
        public function index()
        {
            $this->layout = "home";

        }

        /*  index view  */
        public function view()
        {
            $this->layout = "home";

        }

        /*  storage chosen capacity view  */
        public function chosen_capacity()
        {
            $this->layout = "home";

            $request = $this->request->data;
            $storage = $request['Storage'];

            if ($this->request->is('post')) {
                $this->set(compact('storage'));
            }

        }


        /** **********************************  * **/
        /** * Write to Log req/res HTTP to file * **/
        /** * tue.phpmailer@gmail.com           * **/
        /** **********************************  * **/
        
        
        private function _request_head_log()
        {
            $url = $this->request->here;
            $parameters = null;
            
            if (!empty($this->request->query)) {
                $params_for_params = array();
                $params_for_url = array();
                foreach ($this->request->query as $key => $value) {
                    if ($key === 'url') {
                        continue;
                    }
                    $params_for_params[] = '"' . $key . '" => ' . $value . '"';
                    $params_for_url[] = $key . '=' . $value;
                }
            
                if (!empty($params_for_url)) {
                    $url .= '?' . implode("&" , $params_for_url);
                }
                // log any post params
                $post_params = null;
                if ($this->request->isPost()) {
                    $post_params = "\n POST parameters: " . print_r($this->request->data , true);
                }
                $parameters = sprintf("\n Parameters: {%s}%s" , implode(", " , $params_for_params) , $post_params);
            }
            
            $client_ip = $this->request->clientIp();
            
            $time = date('Y-m-d H:i:s P' , time());
            
            $controller = ucfirst($this->request->controller) . 'Controller';
            $action = $this->request->action;
            
            $content_type = $this->request->header('Accept');
            
            $processing_by = sprintf("\n Processing by %s#%s as %s" , $controller , $action , $content_type);
            
            $msg = sprintf('Started %s "%s" for %s at %s%s%s' , $this->request->method() , $url , $client_ip , $time , $processing_by , $parameters);
            // Write to Log
            Configure::write('current_start_req_time' , microtime(true));
            CakeLog::write('request' , "\n" . $msg);
        }
        
        
        private function log_request_tail()
        {
            $start = Configure::read('current_start_req_time');
            $end = microtime(true);
            $tail = "Completed";
            
            $statusCode = $this->response->statusCode(null);
            $statusDescription = $this->response->httpCodes($statusCode);
            if (is_array($statusDescription) && count($statusDescription) == 1) {
                $keys = array_keys($statusDescription);
                $vals = array_values($statusDescription);
                $tail .= " " . $keys[0] . ' ' . $vals[0];
            }
            
            $tail .= sprintf(" in %.2fms" , ($end - $start) * 1000);
            
            CakeLog::write('request' , "\n" . $tail . "\n\n");
        }
        
       
        
        
        
    }
