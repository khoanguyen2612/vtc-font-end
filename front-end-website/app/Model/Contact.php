<?php


App::uses('AppModel', 'Model');

class Contact extends AppModel {

	public $name = "Contact";

	public $belongsTo = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'Account_id'
		)
	);
	public $validate = array(
		'account_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'blank' => array(
				'rule' => array('blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'domain_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contact_type' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fname' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	public function validate_cn(){
		$this->validate = array(
			'name' => array
			(
				'sizeName' => array(
					'rule' =>array('minLength', 5),
					'message' => 'Tên chủ thể không được ít hơn 5 ký tự'
				)
			),
			'phone' => array(
				'alphaNumeric' => array(
					'rule' => 'Numeric',
					'message' => 'Số điện thoại là chữ số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 10, 11),
					'message' => 'Vui lòng nhập số điện thoai hợp lệ'
				)
			),
			'ownerid' => array(
				'num' => array(
					'rule' => 'Numeric',
					'message' => 'Số CMT là chữ số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 9, 10),
					'message' => 'Vui lòng nhập số CMT hợp lệ'
				)
			),
			'email' => array(
				'rule' => 'email',
				'message' => 'Vui lòng nhập đúng định dạng email'
			),
		);
		if($this->validates($this->validate)){
			return true;
		}else{
			return false;
		}
	}

	function  validate_tc(){

		$this->validate = array(
			'name_tc' => array(
				'sizeName' => array(
					'rule' =>array('minLength', 5),
					'message' => 'Tên chủ thể không được ít hơn 5 ký tự'
				)

			),

			'email_tc' => array(
				'emailformat' => array(
					'rule' => 'email',
					'message' => 'Vui lòng nhập đúng định dạng email'
				),
				'NotBlank' => array(
					'rule' => 'notBlank',
					'message' => 'Email không được để trống'
				),
			),

			'phone_tc' => array(
				'alphaNumeric' => array(
					'rule' => 'Numeric',
					'message' => 'Số điện thoại là chữ số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 10, 11),
					'message' => 'Vui lòng nhập số điện thoai hợp lệ'
				)
			),
			'ownerid_tc' => array(
				'alphaNumeric' => array(
					'rule' => 'Numeric',
					'message' => 'Mã số thuế định dạng dạng số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 10, 11),
					'message' => 'Vui lòng nhập mã số thuế hợp lệ'
				)
			),
			'mn_name' => array(
				'sizeName' => array(
					'rule' =>array('minLength', 5),
					'message' => 'Tên người quản lý không được ít hơn 5 ký tự'
				)

			),

			'mn_email' => array(
				'emailformat' => array(
					'rule' => 'email',
					'message' => 'Vui lòng nhập đúng định dạng email'
				),
				'NotBlank' => array(
					'rule' => 'notBlank',
					'message' => 'Email không được để trống'
				),
			),

			'mn_phone' => array(
				'alphaNumeric' => array(
					'rule' => 'Numeric',
					'message' => 'Số điện thoại là chữ số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 10, 11),
					'message' => 'Vui lòng nhập số điện thoai hợp lệ'
				)
			),
			'mn_ownerid' => array(
				'alphaNumeric' => array(
					'rule' => 'Numeric',
					'message' => 'CMT định dạng chữ số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 10, 11),
					'message' => 'Vui lòng nhập CMT hợp lệ'
				)
			),
			'bill_name' => array(
				'sizeName' => array(
					'rule' =>array('minLength', 5),
					'message' => 'Tên người thanh toán không được ít hơn 5 ký tự'
				)

			),

			'bill_email' => array(
				'emailformat' => array(
					'rule' => 'email',
					'message' => 'Vui lòng nhập đúng định dạng email'
				),
				'NotBlank' => array(
					'rule' => 'notBlank',
					'message' => 'Email không được để trống'
				),
			),

			'bill_phone' => array(
				'alphaNumeric' => array(
					'rule' => 'Numeric',
					'message' => 'Số điện thoại là chữ số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 10, 11),
					'message' => 'Vui lòng nhập số điện thoai hợp lệ'
				)
			),
			'bill_ownerid' => array(
				'alphaNumeric' => array(
					'rule' => 'Numeric',
					'message' => 'CMT định dạng chữ số'
				),
				'between' => array(
					'rule' => array('lengthBetween', 10, 11),
					'message' => 'Vui lòng nhập CMT hợp lệ'
				)
			),

		);

		if($this->validates($this->validate)){
			return true;
		}else{
			return false;
		}

	}
}
