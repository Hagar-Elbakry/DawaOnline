<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$product = $db->query('SELECT * FROM product WHERE item_id = :id',[':id' => $_GET['item_id']])->fetch();


view("product.view.php", [
  'product' => $product
]);