<?php
/**
 *  The routes configuration
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\\Controllers\\HomeController@home');

Macaw::get('/(:all)', function($fu) {
    echo 'Route <b>'.$fu.'</b> Not Found';
});

Macaw::dispatch();