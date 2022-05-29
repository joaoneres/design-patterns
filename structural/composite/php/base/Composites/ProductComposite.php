<?php

require_once 'Components/ProductComponent.php';

class ProductComposite extends ProductComponent
{
  public Array $products = [];

  public function getPrice(): Float
  {
    return array_reduce($this->products, function($sum, $product) {
      return $sum + $product->getPrice();
    }, 0);
  }

  public function add(Array $products): void
  {
    foreach ($products as $product) {
      $this->products[] = $product;
    }
  }

  public function remove(ProductComponent $product): void
  {
    $this->products = array_filter($this->products, function($item) use($product) {
      return $item != $product;
    });
  }
}