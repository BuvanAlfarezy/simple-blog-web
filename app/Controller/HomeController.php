<?php

namespace Advan\BlogWeb\Controller;

// require_once "../core/Controller.php";

use Advan\BlogWeb\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view('Home/index', [
            'title' => 'Home'
        ]);
    }
}