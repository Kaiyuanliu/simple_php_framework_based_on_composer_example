<?php
/**
 *  The routes configuration
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\\Controllers\\HomeController@home');

Macaw::$error_callback = function() {
    throw new Exception("Route Not Found!");
};

Macaw::dispatch();