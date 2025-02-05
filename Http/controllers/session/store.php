<?php

use Http\Forms\LoginForm;
use Core\Authenticator;


$email = $_POST['email'];
$password = $_POST['password'];

$form = LoginForm::validate(['email' => $email, 'password' => $password]);

$signedUp = (new Authenticator)->attemp($email, $password);

    if(!$signedUp) {
        $form->error('email', 'Invalid email or password.')->throw();
    }

redirect('/');





