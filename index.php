<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

$router = Router::load('app/routes.php')
  ->direct(Request::uri(), Request::method());
