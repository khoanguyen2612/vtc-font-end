<?php
App::uses('AppModel', 'Model');
/**
 * Plan Model
 *
 */
class Plan extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $useTable = 'plans';	

	var $hasMany = array(
        // 'Hosting' => array(
        //     'className' => 'Hosting',
        //     'foreignKey' => 'plan_id'
        // ),
        'Cloudserver' => array(
        	'className' => 'Cloudserver',
        	'foreignKey' => 'plan_id'
        )
    );
    var $hasOne=array(
        // 'Product' => array(
        //     'className' => 'Product',
        //     'foreignKey' => 'plan_id'
        // ),
        'Productprice' => array(
            'className' => 'Productprice',
            'foreignKey' => 'plan_id'
        ),
    );

}
