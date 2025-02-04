<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);


$cart = $db->query('SELECT * FROM cart')->fetchAll();
view("cart.view.php", [
    'cart' => $cart,
    'db' => $db
]);