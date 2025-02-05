<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$cart = $db->query('SELECT * FROM cart WHERE user_id = :id',[
    ':id' => Session::get('user')['id']
])->fetchAll();
view("cart.view.php", [
    'cart' => $cart,
    'db' => $db
]);