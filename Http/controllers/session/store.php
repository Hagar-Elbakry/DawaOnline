<?php

use Core\Validator;
use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if(!$form->validate($email, $password)) {
    return view("session/create.view.php", [
        'errors' => $form->errors()
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