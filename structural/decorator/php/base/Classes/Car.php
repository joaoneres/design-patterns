<?php

require_once 'Interfaces/CarInterface.php';

class Car implements CarInterface
{
  public Float $price;
  public String $name;
  public String $description;

  public function __construct(String $name, Float $price, String $description)
  {
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
  }

  public function __toString(): String
  {
    return
      'Nome: ' . $this->getName()
      . ' — Preço: ' . $this->getPrice()
      . ' — Descrição: ' . $this->getDescription();
  }

  public function getPrice(): Float
  {
    return $this->price;
  }

  public function getName(): String
  {
    return $this->name;
  }

  public function getDescription(): String
  {
    return $this->description;
  }
}
