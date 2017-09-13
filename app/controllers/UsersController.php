<?php

namespace App\Controller;

use App\Core\App;

class UsersController
{
  public function index()
  {
    $users = App::get('database')->select_all('users');

    return views("users", compact('users'));
  }

  public function create()
  {
    App::get('database')->insert('users',[
      'name' => $_POST['name']
    ]);
    redirect('users');
  }
}