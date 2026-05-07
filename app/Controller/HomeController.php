<?php

namespace Advan\BlogWeb\Controller;

require_once "../core/Controller.php";

class HomeController extends Controller
{
    public function index()
    {
        $this->view('home/index', [
            'title' => 'Home'
        ]);
    }
}