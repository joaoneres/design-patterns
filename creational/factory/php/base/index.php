<?php

require_once 'Factories/CarFactory.php';
require_once 'Factories/TruckFactory.php';
require_once 'Factories/TransportFactory.php';

class UsingAbstractFactory
{
  public TransportFactory $transportFactory;

  public function __construct()
  {
    $this->transportFactory = new CarFactory();
  }

  public function process()
  {
    $car = $this->transportFactory->createTransport('Mercedes', 'AAA-000', -5, 7);
    return $car->name;
  }
}

$carFactory = new CarFactory();
$truckFactory = new TruckFactory();

$mercedesCar = $carFactory->createTransport('Mercedes', 'AAA-000', -5, 7);
$fiatCar = $carFactory->createTransport('Fiat', 'BBB-A0A', 13, 15);

$scaniaTruck = $truckFactory->createTransport('Scania', '1123338-AAACVV-AA', 40, 19);
$volvoTruck = $truckFactory->createTransport('Volvo', '3492304-SSSIVV-ZZ', 85, 16);

echo 'O carro '.$mercedesCar->name.' de referência '.$mercedesCar->reference.' está na posição x = '.$mercedesCar->currentPosition.' e possui o rendimento de '.$mercedesCar->efficiencyPerMinute.' posições por minuto. <br>';
echo 'O carro '.$fiatCar->name.' de referência '.$fiatCar->reference.' está na posição x = '.$fiatCar->currentPosition.' e possui o rendimento de '.$fiatCar->efficiencyPerMinute.' posições por minuto. <br> <br>';

echo 'O caminhão '.$scaniaTruck->name.' de referência '.$scaniaTruck->reference.' está na posição x = '.$scaniaTruck->currentPosition.' e possui o rendimento de '.$scaniaTruck->efficiencyPerMinute.' posições por minuto. <br>';
echo 'O caminhão '.$volvoTruck->name.' de referência '.$volvoTruck->reference.' está na posição x = '.$volvoTruck->currentPosition.' e possui o rendimento de '.$volvoTruck->efficiencyPerMinute.' posições por minuto. <br>';

$instanceOfUsingAbstractFactory = new UsingAbstractFactory();
$carName = $instanceOfUsingAbstractFactory->process();

echo 'Car name: '.$carName;