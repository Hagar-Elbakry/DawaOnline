<?php


$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/product', 'controllers/product.php');

$router->get('/cart', 'controllers/cart/show.php');
$router->post('/cart', 'controllers/cart/store.php');
$router->delete('/cart', 'controllers/cart/destroy.php');
