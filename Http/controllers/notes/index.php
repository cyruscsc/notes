<?php
// display the notes index page

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

// find all the notes for the current user
$notes = $db->query('select * from notes where user_id = :id', [':id' => $currentUserId])->findAll();

view('notes/index.view.php', [
  'heading' => 'All Notes',
  'description' => 'Here are all your notes.',
  'notes' => $notes,
]);
