<?php 
	Class ServiceRequest extends AppModel
	{
		public $useTable="service_request";

		public $validate = array(
			'name' =>array(
                'too long'=>array(
                    'rule' => array('between', 5, 100),
                    'message' => 'Tên phải lớn 5 ký tự'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Tên không được để trống'
                ),
            ),
			'email' => array(
                'valid email' => array(
                    'rule' => 'email',
                    'message' => 'Nhập địa chỉ email hợp lệ'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Email không được để trống'
                )
            ),
            'phone' => array(
	    		'check num' => array(
	    			'rule' => 'numeric',
	    			'message' => 'Số điện thoại nhập định dạng chữ số'
	    		),
	    		'check num count' => array(
	    			'rule' => array('lengthBetween',10,11),
	    			'message' => 'Vui lòng nhập số điện thoại hợp lệ'
	    		)
	    	),
	    	'cmnd' => array(
                'numeric' => array(
                    'rule' => 'numeric',
                    'message' => 'Số CMND nhập định dạng chữ số',
                ),
                'too long'=>array(
                    'rule' => array('between', 9, 10),
                    'message' => 'Số CMT không hợp lệ',
                ),
            ),
            'company' =>array(
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Tên không được để trống'
                ),
            )
		);

		var $belongsTo = array(
	        'ProductPrice' => array(
	            'className' => 'ProductPrice',
	            'foreignKey' => 'ssl_id'
	        )
	    );


	}
?>