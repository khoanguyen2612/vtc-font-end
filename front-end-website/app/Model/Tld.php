<?php
App::uses('AppModel', 'Model');
/**
 * Tld Model
 *
 */
class Tld extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'tld_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
