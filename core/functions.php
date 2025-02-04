<?php


function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}
function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {
    extract($attributes);
   return require base_path("views/$path");
}

function redirect($path) {
    header('Location: ' . $path);
    die();
}