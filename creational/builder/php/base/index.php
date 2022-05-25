<?php

require_once 'Builders/SimpleCarBuilder.php';
require_once 'Models/TripModel.php';

$simple_car_builder = SimpleCarBuilder::instance()
  ->name('Carro Um')
  ->type('Tipo Dois')
  ->addTrip('Brasil')
  ->addTrip('Argentina')
  ->build();

var_dump($simple_car_builder);
