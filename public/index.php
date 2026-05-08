<?php

use Advan\BlogWeb\Controller\HomeController;


require_once '../vendor/autoload.php';
require_once '../core/Router.php';
require_once '../core/Controller.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

Router::get('/', HomeController::class, 'index');