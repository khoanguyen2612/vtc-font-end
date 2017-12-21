<?php
class AccountGroup extends AppModel{
    var $name = 'AccountGroup';
    var $useTable = 'account_groups';
    public $hasMany   = array(
        'Account'=> array(
            'className' => 'Account',
            'foreignKey' => 'account_group_id'
        )
    );
    public $validate = array(
        'group_name' => array(
            'rule' => 'notBlank',
            'message' => 'Tên Nhóm Không Thể Bỏ Trống'
        )
    );
}