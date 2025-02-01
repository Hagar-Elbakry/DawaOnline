<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/Projects/DawaOnline/' => "controllers/index.php",
    '/Projects/DawaOnline/about' => "controllers/about.php",
    '/Projects/DawaOnline/contact' => "controllers/contact.php"
];

function routeControllers($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) { 
    http_response_code($code);
    require "views/$code.view.php";
    die();
}

routeControllers($uri, $routes);