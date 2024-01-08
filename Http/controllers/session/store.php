<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

// validate form inputs and credentials
$form = LoginForm::validate($attributes = [
  'email' => $_POST['email'],
  'password' => $_POST['password'],
]);

// attempt to sign in
$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

if (!$signedIn) {
  $form->error('credentials', 'Invalid credentials.')->throw();
}

redirect('/');
