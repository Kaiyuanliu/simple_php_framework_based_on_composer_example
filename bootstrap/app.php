<?php
/**
 *  Bootstrap application here
 */

use Illuminate\Database\Capsule\Manager as Capsule;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

define('BASE_PATH', __DIR__.'/../');

require_once BASE_PATH.'vendor/autoload.php';

// ORM
$capsule = new Capsule();
$databaseConfig = require BASE_PATH.'config/database.php';
$capsule->addConnection($databaseConfig);
$capsule->bootEloquent();

// error handler
$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

// TEMPLATE PATH
define('TEMPLATE_PATH', BASE_PATH.'resource/views/');

