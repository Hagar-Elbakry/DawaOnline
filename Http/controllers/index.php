<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$products = $db->query('SELECT * FROM product')->fetchAll();
view("index.view.php", [
    'products' =>$products
]);