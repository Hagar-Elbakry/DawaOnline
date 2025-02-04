<?php

use Http\Forms\LoginForm;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if($form->validate($email, $password)) {
    if((new Authenticator)->attemp($email, $password)) {
        redirect('/');
    }

    $form->error('email', 'Invalid email or password.');
}


return view("session/create.view.php", [
    'errors' => $form->errors()
]);
