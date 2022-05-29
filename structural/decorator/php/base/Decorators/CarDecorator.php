<?php

require_once 'Interfaces/CarInterface.php';

class CarDecorator implements CarInterface
{
  public CarInterface $car;

  public function __construct(CarInterface $car)
  {
    $this->car = $car;
  }

  public function getPrice(): Float
  {
    return $this->car->getPrice();
  }

  public function getName(): String
  {
    return $this->car->getName();
  }

  public function getDescription(): String
  {
    return $this->car->getDescription();
  }
}
