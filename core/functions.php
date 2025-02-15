<?php

use Core\Session;

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}
function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {
    extract($attributes);
    require base_path("views/$path");
}

function redirect($path) {
    header('Location: ' . $path);
    die();
}

function old($key, $default = '') {
   return Session::get('old')[$key] ?? $default;
}

function getTotal($prices) {

    return array_sum($prices);

}