<?php
$config = require "config.php";
$db = new Database($config['database']);


require "views/cart.view.php";