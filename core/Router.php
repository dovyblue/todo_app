<?php

namespace App\Core;

class Router 
{
  public $routes = [
    'GET' => [],
    'POST' => []
  ];

  public static function load($file) 
  {
    $router = new self;
    require $file;
    return $router;
  }
  
  public function get($uri, $controller) 
  {
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller) 
  {
    $this->routes['POST'][$uri] = $controller;
  }

  public function direct($uri,$request_method) 
  {
    if (array_key_exists($uri, $this->routes[$request_method])) 
    {
      return $this->callAction(
        ...explode('@', $this->routes[$request_method][$uri]));
    }
    throw new Exception("no route defind for this URI.");
  }

  protected function callAction($controller, $method)
  {
    $controller = "App\\Controller\\{$controller}";
    $cont = new $controller;
    if (! method_exists($cont, $method))
    {
      throw new Exception("{$controller} does not have {$method} action");
    }
    return $cont->$method();
  }
}