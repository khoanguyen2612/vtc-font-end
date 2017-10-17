<?php

App::uses('AppModel', 'Model');
// App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Account extends AppModel {
    public $name = "Account";
	public $validate = array(
            'nickname' =>array(
                'too long'=>array(
                    'rule' => array('between', 5, 32),
                    'message' => 'Tài khoản phải lớn 5 ký tự'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Tài khoản không được để trống'
                ),
                'duplicate nickname' => array(
                    'rule'=>'isUnique',
                    'message' => 'Tài khoản này đã có người dùng'
                )
            ),
            'original_password' => array(
                'too long' => array(
                    'rule' => array('between', 6, 32),
                    'message' => 'Mật khẩu phải từ 6 ký tự đến 32 ký tự'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Mật khẩu không được để trống'
                ),
                'Match Password' => array(
                    'rule' => 'matchPasswords',
                    'message' => 'Không trùng khớp mật khẩu'
                )
            ),
            'confirm_password' => array(
                'too long' => array(
                    'rule' => array('between', 6, 32),
                    'message' => 'Nhập 6 - 32 ký tự'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Vui lòng xác nhận mật khẩu'
                )
            ),
            'email' => array(
                'valid email' => array(
                    'rule' => 'email',
                    'message' => 'Nhập địa chỉ email hợp lệ'
                ),
                'duplicate email' => array(
                    'rule'=>'isUnique',
                    'message' => 'email đã có người sử dụng'
                )
            ),
            'name' => array(
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Vui lòng nhập họ tên'
                )
            ),
            'phonenumber' => array(
                'numeric' => array(
                    'rule' => 'numeric',
                    'message' => 'Vui lòng nhập số',
                ),
                'too long'=>array(
                    'rule' => array('between', 10, 12),
                    'message' => 'Số điện thoại không hợp lệ',
                ),
            ),
            'CMTND' => array(
                'numeric' => array(
                    'rule' => 'numeric',
                    'message' => 'Vui lòng nhập số',
                ),
                'too long'=>array(
                    'rule' => array('between', 9, 10),
                    'message' => 'Số CMT không hợp lệ',
                ),
            ),

        );

    var $hasOne = array(
        'Organization' => array(
            'className' => 'Organization',
            'foreignKey' => 'account_id'
        )
    );

	public function matchPasswords($data){
        if($this->data['Account']['original_password']==$this->data['Account']['confirm_password']){
            return true;
        }
        $this->invalidate('confirm_password', 'Không trùng khớp mật khẩu');
        return false;
    }

    // public function beforeSave($options = array()) {
    //     if (isset($this->data['Account']['confirm_password'])) {
    //         $hash = Security::hash($this->data['Account']['confirm_password'], 'md5');
    //         $this->data['Account']['confirm_password'] = $hash;
    //     }
    //     return true;
    // }
    public function beforeSave($options = array()) {
            // hash our password
            if (isset($this->data[$this->alias]['confirm_password'])) {
                $this->data[$this->alias]['confirm_password'] = AuthComponent::password($this->data[$this->alias]['confirm_password']);
            }
            
           
            if (isset($this->data[$this->alias]['original_password']) && !empty($this->data[$this->alias]['original_password'])) {
                $this->data[$this->alias]['original_password'] = AuthComponent::password($this->data[$this->alias]['original_password']);
            }
            if (isset($this->data[$this->alias]['login_password']) && !empty($this->data[$this->alias]['login_password'])) {
                $this->data[$this->alias]['login_password'] = AuthComponent::password($this->data[$this->alias]['login_password']);
            }
           // fallback to our parent
            return parent::beforeSave($options);
    }
    


}