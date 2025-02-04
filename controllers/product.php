<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);

$product = $db->query('SELECT * FROM product WHERE item_id = :id',[':id' => $_GET['item_id']])->fetch();


view("product.view.php", [
  'product' => $product
]);