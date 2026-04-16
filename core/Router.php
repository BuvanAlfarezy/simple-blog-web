<?php

class Router {
    public static function get($uri, $action) {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($requestUri === $uri) {
            [$controller, $method] = explode('@', $action);

            require_once "../app/Controllers/$controller.php";

            $controller = new $controller();
            return $controller->$method();
        }
    }
}