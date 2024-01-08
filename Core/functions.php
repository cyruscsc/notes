<?php

use Core\Response;
use Core\Session;

function dd($superglobal)
{
  echo '<pre>';
  die(var_dump($superglobal));
  echo '</pre>';
};

function urlIs($url)
{
  return $_SERVER['REQUEST_URI'] === $url;
};

function abort($statusCode = Response::NOT_FOUND)
{
  http_response_code($statusCode);
  require base_path("views/{$statusCode}.php");
  die;
};

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
  if (!$condition) {
    abort($statusCode);
  }
  return true;
};

function base_path($path)
{
  return BASE_PATH . $path;
};

function view($path, $attributes = [])
{
  extract($attributes);
  require base_path('views/' . $path);
};

function redirect($path)
{
  header("Location: {$path}");
  exit;
};

function old($key, $default = '')
{
  return Session::get('old')[$key] ?? $default;
};
