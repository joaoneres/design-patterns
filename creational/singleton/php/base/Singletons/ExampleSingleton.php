<?php

class ExampleSingleton
{
  private static ?ExampleSingleton $instance = null;
  private function __construct() {}

  public static function getInstance()
  {
    return self::$instance ?: new ExampleSingleton();
  }

  public function sum(Int $a, Int $b) : Int
  {
    return $a + $b;
  }
}