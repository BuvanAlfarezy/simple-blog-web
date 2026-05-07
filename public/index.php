<?php

use Advan\BlogWeb\Controller\HomeController;
require_once '../core/Router.php';
require_once '../core/Controller.php';

Router::get('/', HomeController::class, 'index', []);
Router::get('/post', 'BlogController@show');