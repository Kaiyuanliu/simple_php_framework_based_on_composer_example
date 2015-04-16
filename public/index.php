<?php
/**
 *  The only entry of the application
 *
 * @author     Kaiyuan Liu
 * @version    0.0.1
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 */
define('BASE_PATH', __DIR__.'/../');

require BASE_PATH.'vendor/autoload.php';

// routes
require BASE_PATH.'config/routes.php';
