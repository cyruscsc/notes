<?php
// perform the insert query

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

// validate form inputs
$errors = [];

if (!Validator::string($_POST['body'], 1, 100)) {
  $errors['body'] = 'A body of no more than 100 characters is required.';
}

if (!empty($errors)) {
  return view('notes/create.view.php', [
    'heading' => 'Create a note',
    'description' => 'Create a new note.',
    'errors' => $errors,
  ]);
}

// insert the record into the database
$db->query('insert into notes (body, user_id) values (:body, :user_id)', [
  ':body' => $_POST['body'],
  ':user_id' => $currentUserId,
]);

// redirect to the notes index
header('Location: /notes');
die;
