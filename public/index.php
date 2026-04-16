<?php

require_once '../core/Router.php';
require_once '../core/Controller.php';

Router::get('/', 'BlogController@index');
Router::get('/post', 'BlogController@show');