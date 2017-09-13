<?php

namespace App\Core;

class App 
{

  protected static $array = [];

  public static function bind($key, $value) {
    return static::$array[$key] = $value;
  }

  public static function get($key) {
    if (! array_key_exists($key, static::$array)) {
      throw new Exception("no such key {$key}");
    }
    return static::$array[$key];
  }
}