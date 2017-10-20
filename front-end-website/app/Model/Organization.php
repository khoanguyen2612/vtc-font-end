<?php

App::uses('AppModel', 'Model');

class Organization extends AppModel {

	public $name = "Organization";

	public $validate = array(
	    'phonenumber2' => array(
                'numeric' => array(
                    'rule' => 'numeric',
                    'message' => 'Vui lòng nhập số',
                ),
                'too long'=>array(
                    'rule' => array('between', 10, 12),
                    'message' => 'Số điện thoại không hợp lệ....',
                ),
        ),
        'tax_code' => array(
                'numeric' => array(
                    'rule' => 'numeric',
                    'message' => 'Vui lòng nhập số',
                ),
                'too long'=>array(
                    'rule' => array('between', 10, 13),
                    'message' => 'Mã thuế không hợp lệ',
                ),
            ),
	);

	var $hasOne = array(
        'Account' => array(
            'className' => 'Account',
            'foreignKey' => 'id'
        )
    );

}