<?php


$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');
$router->get('/product', 'product.php')->only('auth');

$router->get('/cart', 'cart/show.php')->only('auth');
$router->post('/cart', 'cart/store.php');
$router->delete('/cart', 'cart/destroy.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php');

$router->get('/session', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php');
$router->delete('/session', 'session/destroy.php')->only('auth');
