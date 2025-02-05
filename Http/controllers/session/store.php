<?php

use Http\Forms\LoginForm;
use Core\Authenticator;


$email = $_POST['email'];
$password = $_POST['password'];

$form = LoginForm::validate(['email' => $email, 'password' => $password]);

$signedIn = (new Authenticator)->attemp($email, $password);

    if(!$signedIn) {
        $form->error('email', 'Invalid email or password.')->throw();
    }

redirect('/');





