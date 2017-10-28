<?php

App::uses('AppModel', 'Model');

class Hosting extends AppModel {

	// public $name = "Hosting";
	public $useTable = 'hostings';

	
    var $belongsTo = array(
        'Plan' => array(
            'className' => 'Plan',
            'foreignKey' => 'plan_id'
        )
    );

}

?>