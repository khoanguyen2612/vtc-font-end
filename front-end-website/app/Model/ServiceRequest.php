<?php
App::uses('AppModel', 'Model');

class ServiceRequest extends AppModel {

    public $useTable = 'service_request';

    public $validate = array(
        'name' => array(
            'name length' => array(
                'rule' => array('minLength', '2'),
                'message' => 'Tên từ 2 kí tự trở lên'
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
    	'address' => array(
                'notBlank' => array(
                    'rule' => 'notBlank',
                    'message' => 'Nhập vào trường địa chỉ',
                )
            ),
    	'email' => array(
    		'rule' => 'email',
    		'message' => 'Định dạng email không đúng'
    	)
    );
}