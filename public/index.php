<?php
/**
 *  The only entry of the application
 *
 * @author     Kaiyuan Liu
 * @version    0.0.1
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 */

define('PUBLIC_PATH', __DIR__);

// require bootstrap file
require_once PUBLIC_PATH.'/../bootstrap/app.php';

// load routes and dispatch
require_once BASE_PATH.'config/routes.php';
