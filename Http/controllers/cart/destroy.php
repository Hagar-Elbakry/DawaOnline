<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


if(isset($_POST['delete_from_cart'])) {
    $deletedItem = $db->query('DELETE FROM cart WHERE item_id = :item_id', ['item_id' => $_POST['item_id']]);
    if($deletedItem) {
        header('Location: /cart');
        die();
    }
}
