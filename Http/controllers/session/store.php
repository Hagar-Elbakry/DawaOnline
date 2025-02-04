<?php

use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if($form->validate($email, $password)) {
    if((new Authenticator)->attemp($email, $password)) {
        redirect('/');
    }

    $form->error('email', 'Invalid email or password.');
}

Session::flash('errors', $form->errors());
Session::flash('old',[
    'email' => $email
]);

return redirect('/login');
