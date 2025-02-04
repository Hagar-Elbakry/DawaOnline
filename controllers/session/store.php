<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if(!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if(!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password .';
}

if(!empty($errors)) {
    return view("session/create.view.php", [
        'errors' => $errors
    ]);
}

$user = $db->query('SELECT * FROM users WHERE email = :email',[
    ':email' => $email,
])->fetch();

if($user) {
    if(password_verify($password, $user['password'])) {
        login($user);
        header('Location: /');
        die();
    }
}

return view("session/create.view.php", [
    'errors' => [
        'email' => 'Invalid email or password.'
    ]
]);