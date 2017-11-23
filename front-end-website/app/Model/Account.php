<?php

App::uses('AppModel', 'Model');
// App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Account extends AppModel {
    public $name = "Account";
	public $validate = array(
            'nickname' =>array(
                'too long'=>array(
                    'rule' => array('between', 5, 32),
                    'message' => 'Tên đăng nhập phải lớn 5 ký tự'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Tên đăng nhập không được để trống'
                ),
                'duplicate nickname' => array(
                    'rule'=>'isUnique',
                    'message' => 'Tên đăng nhập này đã có người dùng'
                ),
                'format nickname' => array(
                    'rule'=> '/^[a-zA-Z0-9]{5,}$/i',
                    'message' => 'Tên đăng nhập chỉ gồm chữ cái và số, không được có các ký tự đặc biệt'
                ),
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
                ),
                'format nickname' => array(
                    'rule'=> '/^[a-zA-Z0-9]{5,}$/i',
                    'message' => 'Mật khẩu chỉ gồm chữ cái và số, không được có các ký tự đặc biệt'
                ),
            ),
            'confirm_password' => array(
                'too long' => array(
                    'rule' => array('between', 6, 32),
                    'message' => 'Nhập 6 - 32 ký tự'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Vui lòng xác nhận mật khẩu'
                ),
                'format nickname' => array(
                    'rule'=> '/^[a-zA-Z0-9]{5,}$/i',
                    'message' => 'Mật khẩu chỉ gồm chữ cái và số, không được có các ký tự đặc biệt'
                ),
            ),
            'email' => array(
                'valid email' => array(
                    'rule' => 'email',
                    'message' => 'Nhập địa chỉ email hợp lệ'
                ),
                'duplicate email' => array(
                    'rule'=>'isUnique',
                    'message' => 'email đã có người sử dụng'
                ),
                'not empty' => array(
                    'rule' => 'notBlank',
                    'message' => 'Email không được để trống'
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
                    'allowEmpty' => true,
                    'message' => 'Vui lòng nhập số',
                ),
                'too long'=>array(
                    'rule' => array('between', 9, 10),
                    'allowEmpty' => true,
                    'message' => 'Số CMT không hợp lệ',
                ),
            ),
            'phonenumber2' => array(
                'numeric' => array(
                    'rule' => 'numeric',
                    'allowEmpty' => true,
                    'message' => 'Vui lòng nhập số',
                ),
                'too long'=>array(
                    'rule' => array('between', 10, 12),
                    'allowEmpty' => true,
                    'message' => 'Số điện thoại không hợp lệ....',
                ),
            ),
            'tax_code' => array(
                'numeric' => array(
                    'rule' => 'numeric',
                    'allowEmpty' => true,
                    'message' => 'Vui lòng nhập số',
                ),
                'too long'=>array(
                    'rule' => array('between', 10, 13),
                    'allowEmpty' => true,
                    'message' => 'Mã thuế không hợp lệ',
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