<?php
/**
 * \HomeController
 */

namespace App\Controllers;

use App\Models\Article;

class HomeController extends BaseController
{
    public function home()
    {
        $article = Article::first();
        require BASE_PATH.'app/views/home.php';
    }
}