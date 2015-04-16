<?php
/**
 * BaseController.php
 */

namespace App\Controllers;

use App\Services\View;

class BaseController
{
    protected $view;

    public function __construct()
    {

    }

    public function __destruct()
    {
        $view = $this->view;
        if ($view instanceof View) {
            extract($view->data);
            require_once $view->view;
        }
    }
}