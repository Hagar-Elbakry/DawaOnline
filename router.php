<?php
$routes = require base_path("routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeControllers($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = Response::NOT_FOUND) { 
    http_response_code($code);
    require "views/$code.view.php";
    die();
}

routeControllers($uri, $routes);