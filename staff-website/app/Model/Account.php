<?php
class Account extends AppModel{
    public $name = 'Account';
    public $useTable = 'accounts';

    public $belongsTo = array(
        'AccountGroup' => array(
            'className' => 'AccountGroup',
            'foreignKey' => 'account_group_id'
        )
    );

}