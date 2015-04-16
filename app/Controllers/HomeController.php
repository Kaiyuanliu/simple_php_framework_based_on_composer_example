<?php
/**
 * \HomeController
 */

namespace App\Controllers;

use App\Models\Article;
use App\Services\View;

class HomeController extends BaseController
{
    public function home()
    {
        $this->view = View::make('home')->with('article', Article::first())
                                        ->withTitle("MFFC :D")
                                        ->withFuckMe('ok!');
    }
}