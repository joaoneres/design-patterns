<?php

abstract class ProductComponent
{
  abstract function getPrice(): Float;

  public function add(Array $products): void {}
  public function remove(ProductComponent $product): void {}
}