<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);

$products = $db->query('SELECT * FROM product')->fetchAll();
view("index.view.php", [
    'products' =>$products
]);