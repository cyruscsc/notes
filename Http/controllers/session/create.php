<?php

use Core\Session;

view('session/create.view.php', [
  'type' => 'login',
  'heading' => 'Login to your account.',
  'buttonText' => 'Login',
  'errors' => Session::get('errors') ?? [],
]);
