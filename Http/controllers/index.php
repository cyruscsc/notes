<?php
// display the home page

$user = $_SESSION['user']['name'] ?? 'there';

view('index.view.php', [
  'heading' => "Hi {$user}!",
  'description' => 'Welcome to the note-taking app.'
]);
