<?php
/******************************************************************************
 * tue.phpmailer@gmail.com                                                    *
 ******************************************************************************/

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'home', 'action' => 'index', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	/* tue.phpmailer@gmail.com config route URL */
Router::connect('/carts', array('controller' => 'Carts', 'action' => 'view'));
	Router::connect('/cart/', array('controller' => 'Carts', 'action' => 'view'));
	Router::connect('/cart/continuebuy', array('controller' => 'Carts', 'action' => 'continue_buy_product'));
	Router::connect('/cart/checkout', array('controller' => 'Carts', 'action' => 'checkout'));
	//Router::connect('/cart', array('controller' => 'Carts', 'action' => 'view'));
	Router::connect('/cart/update', array('controller' => 'Carts', 'action' => 'update'));
Router::connect('/cart/del', array('controller' => 'Carts', 'action' => 'remove'));
Router::connect('/carts/del', array('controller' => 'Carts', 'action' => 'remove'));
Router::connect('/carts/del_i', array('controller' => 'Carts', 'action' => 'update_i_cart'));
Router::connect('/carts/del_i', array('controller' => 'Cart', 'action' => 'update_i_cart'));




    /* tue.phpmailer@gmail.com add route for KhoaND */
Router::connect('/cart/register', array('controller' => 'Infocarts', 'action' => 'register'));
//Router::connect('/cart/register', array('controller' => 'Infocarts', 'action' => 'register'));

/* tue.phpmailer@gmail.com add route for ThangDH */
Router::connect('/domain/register', array('controller' => 'ProductPrices', 'action' => 'register_domain'));
Router::connect('/domain/search', array('controller' => 'ProductPrices', 'action' => 'result_search'));
Router::connect('/Domains/search', array('controller' => 'ProductPrices', 'action' => 'result_search'));
Router::connect('/Domains/Domain_search.html', array('controller' => 'ProductPrices', 'action' => 'result_search'));

	//Router::connect('/domain/ResultSearch', array('controller' => 'ProductPrices', 'action' => 'resultsearch'));
	//Router::connect('/domain/RegisterDomain', array('controller' => 'ProductPrices', 'action' => 'registerdomain'));
	//Router::connect('/productprices/resultsearch', array('controller' => 'ProductPrices', 'action' => 'ResultSearch'));
	//Router::connect('/productprices/registerdomain', array('controller' => 'ProductPrices', 'action' => 'RegisterDomain'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
