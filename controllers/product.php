<?php
$config = require base_path("config.php");
$db = new Database($config['database']);

$product = $db->query('SELECT * FROM product WHERE item_id = :id',[':id' => $_GET['item_id']])->fetch();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['add_to_cart_submit'])) {
      $pro = $db->query('INSERT INTO cart(user_id, item_id) VALUES (:user_id,:item_id)', [
        ':user_id' => $_POST['user_id'],
        ':item_id' => $_POST['item_id']
      ]);

      if($pro) {
        header('Location: /cart');
        die();
      }
    }
  }

view("product.view.php", [
  'product' => $product
]);