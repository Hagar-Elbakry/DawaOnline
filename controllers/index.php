<?php
$config = require "config.php";
$db = new Database($config['database']);

$products = $db->query('SELECT * FROM product')->fetchAll();
require "views/index.view.php";