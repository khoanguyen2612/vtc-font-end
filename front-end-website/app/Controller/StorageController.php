    <?php

    /******************************************************************************
     * tue.phpmailer@gmail.com                                                    *
     ******************************************************************************/

    App::uses('AppController', 'Controller');
    App::uses('CakeTime', 'Utility');

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
        public $uses = array('Product', 'Cart', 'Order', 'OrderDetail', 'ProductPrice');
        public $components = array('Acl', 'RequestHandler');
        public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Session');

        function beforeFilter()
        {
            parent::beforeFilter();
            $this->_request_head_log();

            //$this->ProductPrice->setDataSource('default');

        }

        /** before redict check login **/

        /***
         * public function beforeRedirect()
         * {
         * parent::beforeRedirect('/storage/');
         *
         * $this->log_request_tail();
         * }
         ***/

        public function afterFilter()
        {
            parent::afterFilter();

            $this->log_request_tail();
        }

        /*  index view  */
        public function index()
        {

            Configure::write('debug', 2);
            $this->layout = "home";

            $all_storage = $this->ProductPrice->find('all',
                array ( 'fields' => array('product_id', 'product_key', 'product_type', 'product_name', 'product_description', 'price', 'except_hdd'),
                        //'conditions' => array('product_name LIKE' => '%STORAGE%', 'product_type =' => '5'),
                        'conditions' => array('product_name LIKE' => '%%', 'product_type =' => '5'),
                        'recursive' => 0,
                )
            );

            $this->set(compact('all_storage'));

        }

        /*  index view  */
        public function view()
        {

            Configure::write('debug', 2);
            $this->layout = "home";

            $all_storage = $this->ProductPrice->find('all',
                array ( 'fields' => array('product_id', 'product_key', 'product_type', 'product_name', 'product_description', 'price', 'except_hdd'),
                    //'conditions' => array('product_name LIKE' => '%STORAGE%', 'product_type =' => '5'),
                    'conditions' => array('product_type =' => '5'),
                    'recursive' => 0,
                )
            );

            $this->set(compact('all_storage'));

        }

        /*  storage chosen capacity view  */
        public function chosen_capacity()
        {
             $this->layout = "home";

             $request = $this->request->data;
             $storage = isset($request['Storage']) ? $request['Storage']: array();

             $matches = preg_match_all("/((\d+)[gb]+)/i", strtolower($storage['l_capacity']), $_capacity_gb);

             if (count($_capacity_gb) == 3 && $matches) {
                $min = $_capacity_gb[2][0];
                $max = $_capacity_gb[2][1];
             } else {
                 $min = 0;
                 $max = 100;
             };

             if ($this->request->is('post')) {

                $this->set(compact('min'));
                $this->set(compact('max'));
                $this->set(compact('storage'));
             } else {
                $this->redirect('/storage/');
             }

        }
        /*  storage chosen capacity view  */
        public function add_to_cart()
        {
            $this->layout = "home";
            $request = $this->request->data;

            $storage = isset($request['Storage']) ? $request['Storage'] : array();
            $cart = array();

            if ($this->request->is('post')) {
                if ( !empty($request) && count($request) > 0 && count($storage) > 0 ) {
                    // define 1 product in order detail item to add on to cart,
                    // for Database
                    $order_detail['id'] = rand(95000, 99999);  // new id for item in OrderDetail on to session Cart
                    // detail for Order detail
                    $order_detail['order_id'] = null;
                    $order_detail['product_id'] = 0; // for STORAGE cloud
                    $order_detail['domain_name'] = $storage['l_capacity'];
                    $order_detail['action_id'] = 0;
                    $order_detail['order_type'] = 1;
                    $order_detail['order_dtl_status'] = 1;
                    $order_detail['price'] = $storage['l_price']; // int
                    $order_detail['quantity'] = $storage['month'];  // int
                    $order_detail['amount'] = 0;
                    $order_detail['total'] = 0;
                    $order_detail['discount'] = 0;
                    $order_detail['code_affilates'] = 'CODE_AFF_0321A';
                    $order_detail['code_qc'] = 'CODE_QC_0321A';
                    $order_detail['notes'] = 'Thông tin note khách hàng mua sản phẩm'; // string
                    $order_detail['payment_method'] = 0;
                    $date_getmoney = CakeTime::format(date('Y-m-d H:i:s'), '%Y-%m-%d %H:%M:%S', 'N/A', 'Asia/Ho_Chi_Minh');
                    $order_detail['date_getmoney'] = $date_getmoney; // string, varchar
                    $order_detail['money_kd'] = 0;
                    $order_detail['flg_renew'] = 0;
                    $order_detail['hosting_id'] = 0;
                    $order_detail['customer_id'] = 0;
                    $order_detail['campainh'] = 'ký tự, unknow value ?';  // varchar
                    $order_detail['totenten'] = 'ký tự, unknow value ?';  // varchar
                    $order_detail['csr_string'] = 'ký tự, unknow value ?';  // varchar
                    $order_detail['payment_activator'] = 'Người active Payment'; // string
                    $order_detail['auth_code_tranfer'] = 'ACT_0321A'; // string
                    $order_detail['detail_id_sub'] = 0;
                    $order_detail['flg_smartphone'] = 0;
                    $order_detail['user_confirm_active'] = 'UCA_0321A'; // string
                    $order_detail['ketoan_update'] = $date_getmoney;  // datetime
                    $order_detail['note_ketoan'] = 'Ghi nhớ cho kế toán'; // string
                    // Update field product of cart array
                    // for view layout
                    // Type: 5 --> is Cloud Storage package product
                    switch ((string) 5) {
                        case '1':
                            $p_type = 'Domain';
                            break;
                        case '2':
                            $p_type = 'Window hosting';
                            break;
                        case '3':
                            $p_type = 'Linux hosting';
                            break;
                        case '4':
                            $p_type = 'Other';
                            break;
                        case '5':
                            $p_type = 'Cloud Storage';
                            break;
                        default :
                            $p_type = 'Other';
                            break;
                    }
                    $order_detail['product_type'] = 5;
                    $order_detail['product_name'] =  $storage['l_capacity'];
                    // for view layout
                    $order_detail['type'] = $p_type; // 'Cloud Storage';
                    // for view layout
                    //number year exp
                    $order_detail['year_exp'] = 0;
                    $order_detail['month_exp'] = $storage['month'];
                    //add product to cart
                    $cart['product'] = $order_detail;
                }
                $this->Cart->addProduct($cart);
            }

            if ($this->request->is('post')) {
                $this->set(compact('storage'));
            } else {
                $this->redirect('/cart/');
            }
            $this->redirect('/cart/');
        }

        /*  money currency chosen capacity view  */
        public function change_money()
        {
            $this->autoRender = false;
            $this->request->onlyAllow('ajax'); // No direct access via browser URL

            if ($this->RequestHandler->isAjax()) {
                Configure::write('debug', 0);
            }

            if ($this->RequestHandler->isAjax()) {
                if ($this->request->is('post')) {

                    $request = $this->request->data;
                    $total_l_price = $request['total_l_price'];

                    $this->response->body(json_encode(array(
                        'l_price' =>  $total_l_price,
                        'total_l_price' =>  number_format( $total_l_price,0,',','.'),
                    )));
                    $this->response->send();
                    $this->_stop();
                }
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
                    $url .= '?' . implode("&", $params_for_url);
                }
                // log any post params
                $post_params = null;
                if ($this->request->isPost()) {
                    $post_params = "\n POST parameters: " . print_r($this->request->data, true);
                }
                $parameters = sprintf("\n Parameters: {%s}%s", implode(", ", $params_for_params), $post_params);
            }

            $client_ip = $this->request->clientIp();

            $time = date('Y-m-d H:i:s P', time());

            $controller = ucfirst($this->request->controller) . 'Controller';
            $action = $this->request->action;
            $content_type = $this->request->header('Accept');

            $processing_by = sprintf("\n Processing by %s#%s as %s", $controller, $action, $content_type);

            $msg = sprintf('Started %s "%s" for %s at %s%s%s', $this->request->method(), $url, $client_ip, $time, $processing_by, $parameters);
            // Write to Log
            Configure::write('current_start_req_time', microtime(true));
            CakeLog::write('request', "\n" . $msg);
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

            $tail .= sprintf(" in %.2fms", ($end - $start) * 1000);

            CakeLog::write('request', "\n" . $tail . "\n\n");
        }

    }






