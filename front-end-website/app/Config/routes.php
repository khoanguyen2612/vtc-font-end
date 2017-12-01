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
	Router::connect('/cart', array('controller' => 'Carts', 'action' => 'view'));
    Router::connect('/carts/', array('controller' => 'Carts', 'action' => 'view'));
    Router::connect('/cart/', array('controller' => 'Carts', 'action' => 'view'));

    Router::connect('/carts/continuebuy', array('controller' => 'Carts', 'action' => 'continue_buy_product'));
	Router::connect('/cart/continuebuy', array('controller' => 'Carts', 'action' => 'continue_buy_product'));

    Router::connect('/carts/checkout', array('controller' => 'Carts', 'action' => 'checkout'));
	Router::connect('/cart/checkout', array('controller' => 'Carts', 'action' => 'checkout'));

    Router::connect('/carts/payment', array('controller' => 'Carts', 'action' => 'payment'));
    Router::connect('/cart/payment', array('controller' => 'Carts', 'action' => 'payment'));

    Router::connect('/carts/finish', array('controller' => 'Carts', 'action' => 'finish'));
    Router::connect('/cart/finish', array('controller' => 'Carts', 'action' => 'finish'));

	//Router::connect('/cart', array('controller' => 'Carts', 'action' => 'view'));
	Router::connect('/cart/update', array('controller' => 'Carts', 'action' => 'update'));
    Router::connect('/carts/update', array('controller' => 'Carts', 'action' => 'update'));

	Router::connect('/cart/del', array('controller' => 'Carts', 'action' => 'remove'));
    Router::connect('/carts/del', array('controller' => 'Carts', 'action' => 'remove'));
    Router::connect('/cart/remove', array('controller' => 'Carts', 'action' => 'remove'));
    Router::connect('/carts/remove', array('controller' => 'Carts', 'action' => 'remove'));


    Router::connect('/cart/update_ajax_it', array('controller' => 'Carts', 'action' => 'update_ajax_it'));
    Router::connect('/carts/update_ajax_it', array('controller' => 'Carts', 'action' => 'update_ajax_it'));

    Router::connect('/cart/del_ajax_it', array('controller' => 'Carts', 'action' => 'del_ajax_it'));
    Router::connect('/carts/del_ajax_it', array('controller' => 'Carts', 'action' => 'del_ajax_it'));
    Router::connect('/cart/add_domain', array('controller' => 'Carts', 'action' => 'add_domain'));
    Router::connect('/carts/add_domain', array('controller' => 'Carts', 'action' => 'add_domain'));

    Router::connect('/cart/update_ajax_sum_money', array('controller' => 'Carts', 'action' => 'update_ajax_sum_money'));
    Router::connect('/carts/update_ajax_sum_money', array('controller' => 'Carts', 'action' => 'update_ajax_sum_money'));

    Router::connect('/cart/vtc_payment', array('controller' => 'Carts', 'action' => 'vtc_payment'));
    Router::connect('/carts/vtc_payment', array('controller' => 'Carts', 'action' => 'vtc_payment'));

    Router::connect('/cart/gif_code_daily_ajax_sum_money', array('controller' => 'Carts', 'action' => 'gif_code_daily_ajax_sum_money'));
    Router::connect('/carts/gif_code_daily_ajax_sum_money', array('controller' => 'Carts', 'action' => 'gif_code_daily_ajax_sum_money'));
    Router::connect('/cart/supporters_ajax', array('controller' => 'Carts', 'action' => 'supporters_ajax'));
    Router::connect('/carts/supporters_ajax', array('controller' => 'Carts', 'action' => 'supporters_ajax'));

    Router::connect('/cart/ajax_otp_change_year_money', array('controller' => 'Carts', 'action' => 'ajax_otp_change_year_money'));
    Router::connect('/carts/ajax_otp_change_year_money', array('controller' => 'Carts', 'action' => 'ajax_otp_change_year_money'));

    Router::connect('/cart/payment', array('controller' => 'Carts', 'action' => 'payment'));
    Router::connect('/carts/payment', array('controller' => 'Carts', 'action' => 'payment'));

    Router::connect('/cart/accept_payment', array('controller' => 'Carts', 'action' => 'accept_payment'));
    Router::connect('/carts/accept_payment', array('controller' => 'Carts', 'action' => 'accept_payment'));

    Router::connect('/cart/finish', array('controller' => 'Carts', 'action' => 'finish'));
    Router::connect('/carts/finish', array('controller' => 'Carts', 'action' => 'finish'));

    /* tue.phpmailer@gmail.com config route Storage Cloud URL */
    Router::connect('/storage', array('controller' => 'Storage', 'action' => 'index'));
    Router::connect('/storage/', array('controller' => 'Storage', 'action' => 'index'));
    Router::connect('/storage/chosen_capacity', array('controller' => 'Storage', 'action' => 'chosen_capacity'));
    Router::connect('/storage/chosen_capacity/', array('controller' => 'Storage', 'action' => 'chosen_capacity'));
    Router::connect('/storage/change_money', array('controller' => 'Storage', 'action' => 'change_money'));
    Router::connect('/storage/change_money/', array('controller' => 'Storage', 'action' => 'change_money'));
    /* tue.phpmailer@gmail.com config route Storage Cloud URL */



    /* tue.phpmailer@gmail.com add route for KhoaND */
    Router::connect('/cart/register', array('controller' => 'Infocarts', 'action' => 'register'));
    Router::connect('/carts/register', array('controller' => 'Infocarts', 'action' => 'register'));
    //Router::connect('/cart/register', array('controller' => 'Infocarts', 'action' => 'register'));

    /* tue.phpmailer@gmail.com add route for ThangDH */
    Router::connect('/domain/register', array('controller' => 'ProductPrices', 'action' => 'register_domain'));
    Router::connect('/domain/search', array('controller' => 'ProductPrices', 'action' => 'result_search'));
    Router::connect('/domain/transfer', array('controller' => 'ProductPrices', 'action' => 'domain_transfer'));
    Router::connect('/new/menunew', array('controller' => 'News', 'action' => 'news_menulist'));
    Router::connect('/new/detailnew', array('controller' => 'News', 'action' => 'notificion_maintain'));
    //Router::connect('/Domains/search', array('controller' => 'ProductPrices', 'action' => 'result_search'));
    //Router::connect('/Domains/Domain_search.html', array('controller' => 'ProductPrices', 'action' => 'result_search'));

	//Router::connect('/domain/ResultSearch', array('controller' => 'ProductPrices', 'action' => 'resultsearch'));
	//Router::connect('/domain/RegisterDomain', array('controller' => 'ProductPrices', 'action' => 'registerdomain'));
	//Router::connect('/productprices/resultsearch', array('controller' => 'ProductPrices', 'action' => 'result_search'));
	//Router::connect('/productprices/registerdomain', array('controller' => 'ProductPrices', 'action' => 'register_domain'));
        Router::connect('/domain/price', array('controller' => 'ProductPrices', 'action' => 'price'));

    Router::parseExtensions('json', 'xml');

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
