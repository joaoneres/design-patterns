<?php

require 'Classes/Ship.php';

$ship = new Ship('Seaship', 'AAABBB', 2002);
$ship->reference = 'BBBCCC';

$cloned_ship = $ship->clone();
$cloned_ship->name = 'FirstShip';

echo $ship;
echo '<br>';
echo $cloned_ship;

var_dump($ship);
var_dump($cloned_ship);