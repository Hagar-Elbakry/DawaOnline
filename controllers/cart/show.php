<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$cart = $db->query('SELECT * FROM cart')->fetchAll();
view("cart.view.php", [
    'cart' => $cart,
    'db' => $db
]);