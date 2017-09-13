<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

function views($page, $data = [])
{
  extract($data);
  return require "app/views/{$page}.view.php";
}

function redirect($path)
{
  return header("Location: /{$path}");
}
