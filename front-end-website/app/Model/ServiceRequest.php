<?php
App::uses('AppModel', 'Model');

class ServiceRequest extends AppModel {

    public $useTable = 'service_request';

    public $validate = array(
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
    	'email' => array(
    		'rule' => 'email',
    		'message' => 'Định dạng email không đúng'
    	)
    );
}