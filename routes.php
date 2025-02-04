<?php


$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/product', 'controllers/product.php')->only('auth');

$router->get('/cart', 'controllers/cart/show.php')->only('auth');
$router->post('/cart', 'controllers/cart/store.php');
$router->delete('/cart', 'controllers/cart/destroy.php');

$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php');
