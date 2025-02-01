<?php
$config = require "config.php";
$db = new Database($config['database']);

$product = $db->query('SELECT * FROM product WHERE item_id = :id',[':id' => $_GET['item_id']])->fetch();

require "views/product.view.php";