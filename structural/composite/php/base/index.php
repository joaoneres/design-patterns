<?php

require_once 'Composites/ProductComposite.php';
require_once 'Leafs/ProductLeaf.php';

$supermarket_box = new ProductComposite(); 

$supermarket_box->add([
  new ProductLeaf('Fee', 1.31, 'AAABCC'),
]);

$butchery_box = new ProductComposite();

$butchery_box->add([
  new ProductLeaf('Sausage', 25.32, 'OSA712'),
  new ProductLeaf('Beef', 62.21, 'ASHC8S'),
  new ProductLeaf('Pork', 41.55, 'ASJFVC'),
]);

$bakery_box = new ProductComposite();

$bakery_box->add([
  new ProductLeaf('Bread', 7.88, '28334J'),
]);

$supermarket_box->add([
  $butchery_box,
  $bakery_box,
]);

var_dump($supermarket_box);

var_dump([
  'Supermarket Box Price' => $supermarket_box->getPrice(),
  'Supermarket Butchery Box Price' => $butchery_box->getPrice(),
  'Supermarket Bakery Box Price' => $bakery_box->getPrice(),
]);

$supermarket_box->remove($butchery_box);

var_dump($supermarket_box);

var_dump([
  'Supermarket Box Price' => $supermarket_box->getPrice(),
]);

