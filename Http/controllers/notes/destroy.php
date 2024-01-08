<?php
// perform the delete query

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

// find the coreesponding note
$note = $db->query('select * from notes where id = :id', [':id' => $_POST['id']])->findOrFail();

// authorize the current user
authorize($note['user_id'] === $currentUserId);

// delete the record in the database
$db->query('delete from notes where id = :id', [':id' => $_POST['id']]);

// redirect to the notes index
header('Location: /notes');
exit();
