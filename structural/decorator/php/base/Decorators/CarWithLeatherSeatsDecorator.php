<?php

require_once 'CarDecorator.php';

class CarWithLeatherSeatsDecorator extends CarDecorator
{
  public function getPrice(): Float
  {
    return $this->car->getPrice() + 3000;
  }

  public function getName(): String
  {
    return $this->car->getName() . ' (COM BANCOS DE COURO)';
  }

  public function getDescription(): String
  {
    return $this->car->getDescription() . ' (Couro sintético)';
  }
}
