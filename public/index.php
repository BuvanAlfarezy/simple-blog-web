<?php


use Advan\BlogWeb\Controller\HomeController;
use Advan\BlogWeb\Controller\BlogController;


require_once '../vendor/autoload.php';
require_once '../core/Router.php';
require_once '../core/Controller.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

Router::get('/', HomeController::class, 'index');
Router::get('/home', HomeController::class, 'index');
Router::get('/blog', BlogController::class, 'index');
Router::get('/blog/show', BlogController::class, 'show');