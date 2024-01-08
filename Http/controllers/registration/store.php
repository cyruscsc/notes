<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// validate form inputs
$errors = [];

if (!Validator::string($name, 2, 10)) {
  $errors['name'] = 'A name between 2 and 10 characters is required.';
}
if (!Validator::email($email)) {
  $errors['email'] = 'A valid email address is required.';
}
if (!Validator::string($password, 8, 255)) {
  $errors['password'] = 'A password of at least 8 characters is required.';
}

if (!empty($errors)) {
  return view('registration/create.view.php', [
    'type' => 'register',
    'heading' => 'Register for an account.',
    'buttonText' => 'Register',
    'errors' => $errors,
  ]);
}

// check if the account already exists
$user = $db->query('select * from users where email = :email', [
  ':email' => $email,
])->find();

if ($user) {
  header('Location: /login');
  exit;
}

// create the user
$db->query('insert into users (name, email, password) values (:name, :email, :password)', [
  ':name' => $name,
  ':email' => $email,
  ':password' => password_hash($password, PASSWORD_BCRYPT),
]);

// log the user in
login([
  'name' => $name,
  'email' => $email,
]);

return header('Location: /');
exit;
