<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);


if(isset($_POST['delete_from_cart'])) {
    $deletedItem = $db->query('DELETE FROM cart WHERE item_id = :item_id', ['item_id' => $_POST['item_id']]);
    if($deletedItem) {
        header('Location: /cart');
        die();
    }
}
