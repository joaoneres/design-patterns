<?php

require_once 'Components/ProductComponent.php';

class ProductLeaf extends ProductComponent
{
  public $name, $price, $reference;

  public function __construct(String $name, Float $price, String $reference)
  {
    $this->name = $name;
    $this->price = $price;
    $this->reference = $reference;
  }

  public function getPrice(): Float
  {
    return $this->price;
  }
}