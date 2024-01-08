<?php
// display the show note page

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

// find the corresponding note
$note = $db->query('select * from notes where id = :id', [':id' => $_GET['id']])->findOrFail();

// authorize the current user
authorize($note['user_id'] === $currentUserId);

view('notes/show.view.php', [
  'heading' => 'Single Note',
  'description' => 'Here is one of your notes.',
  'note' => $note
]);
