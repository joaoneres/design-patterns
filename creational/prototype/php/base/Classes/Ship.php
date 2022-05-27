<?php

require_once 'Interfaces/PrototypeInterface.php';

class Ship implements PrototypeInterface
{
  public String $name, $reference;
  public Int $year;

  public function __construct(String $name, String $reference, Int $year)
  {
    $this->name = $name;
    $this->reference = $reference;
    $this->year = $year;
  }

  public function clone()
  {
    $ship = clone $this;
    return $ship;     
  }

  public function __toString() : String
  {
    return 'Name: '.$this->name.', Reference: '.$this->reference.', Year: '.$this->year;
  }
}