<?php

require_once 'CarDecorator.php';

class CarWithAutomaticWindowDecorator extends CarDecorator
{
  public function getPrice(): Float
  {
    return $this->car->getPrice() + 6000;
  }

  public function getName(): String
  {
    return $this->car->getName() . ' (COM JANELAS AUTOMÁTICAS)';
  }
}
