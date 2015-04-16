<?php
/**
 *  The only entry of the application
 *
 * @author     Kaiyuan Liu
 * @version    0.0.1
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 */
$basePath = __DIR__.'/../';

require $basePath.'vendor/autoload.php';

// routes
require $basePath.'config/routes.php';
