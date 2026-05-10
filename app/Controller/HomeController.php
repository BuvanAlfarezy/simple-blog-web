<?php

namespace Advan\BlogWeb\Controller;

// require_once "../core/Controller.php";

use Advan\BlogWeb\Core\Controller;
use Advan\BlogWeb\Model\Post;
use Advan\BlogWeb\Config\Database;

class HomeController extends Controller
{
    public function index()
    {
        $postModel = new Post();

        $posts = $postModel->getAll();

        $this->view('Home/index', [
            'title' => 'Home',
            'posts' => $posts
        ]);
    }
}