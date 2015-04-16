<?php
/**
 *  Bootstrap application here
 */

use Illuminate\Database\Capsule\Manager as Capsule;

define('BASE_PATH', __DIR__.'/../');

require_once BASE_PATH.'vendor/autoload.php';

// ORM

$capsule = new Capsule();
$databaseConfig = require BASE_PATH.'config/database.php';
$capsule->addConnection($databaseConfig);
$capsule->bootEloquent();

// load routes and dispatch
require_once BASE_PATH.'config/routes.php';