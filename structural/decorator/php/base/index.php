<?php

require_once 'Classes/Car.php';
require_once 'Decorators/CarWithAutomaticWindowDecorator.php';
require_once 'Decorators/CarWithLeatherSeatsDecorator.php';

$car = new Car('FiatUno', 80000, 'Carro popular');
$car_with_automatic_window = new CarWithAutomaticWindowDecorator($car);
$car_with_automatic_window_and_leather_seats = new CarWithLeatherSeatsDecorator($car_with_automatic_window);

echo 'Carro simples: <br>';
echo $car;
echo '<br> <br>';

echo 'Carro simples com janelas automáticas: <br>';
echo 'Nome: ' . $car_with_automatic_window->getName() . ' — Preço: ' . $car_with_automatic_window->getPrice() . ' — Descrição: ' . $car_with_automatic_window->getDescription();
echo '<br> <br>';

echo 'Carro simples com janelas automáticas e bancos de couro: <br>';
echo 'Nome: ' . $car_with_automatic_window_and_leather_seats->getName() . ' — Preço: ' . $car_with_automatic_window_and_leather_seats->getPrice() . ' — Descrição: ' . $car_with_automatic_window_and_leather_seats->getDescription();
echo '<br>';
