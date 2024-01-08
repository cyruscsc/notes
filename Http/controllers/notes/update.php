<?php
// perform the update query

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

// find the coreesponding note
$note = $db->query('select * from notes where id = :id', [':id' => $_POST['id']])->findOrFail();

// authorize the current user
authorize($note['user_id'] === $currentUserId);

// validate the request
$errors = [];

if (!Validator::string($_POST['body'], 1, 100)) {
  $errors['body'] = 'A body of no more than 100 characters is required.';
}

if (!empty($errors)) {
  return view('notes/edit.view.php', [
    'heading' => 'Edit a note',
    'description' => "Edit \"{$note['body']}\".",
    'note' => $note,
    'errors' => $errors,
  ]);
}

// update the record in the database
$db->query('update notes set body = :body where id = :id', [
  ':body' => $_POST['body'],
  ':id' => $_POST['id'],
]);

// redirect to the note
header("Location: /note?id={$note['id']}");
die;
