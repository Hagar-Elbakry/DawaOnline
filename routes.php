<?php

//return [
//    '/' => "controllers/index.php",
//    '/about' => "controllers/about.php",
//    '/contact' => "controllers/contact.php",
//    '/product' => "controllers/product.php",
//    '/cart' => "controllers/cart.php"
//];

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/product', 'controllers/product.php');
$router->post('/cart', 'controllers/cart/store.php');

$router->get('/cart', 'controllers/cart/show.php');
$router->delete('/cart', 'controllers/cart/destroy.php');
