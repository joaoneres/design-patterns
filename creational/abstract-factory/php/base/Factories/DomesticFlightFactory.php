<?php

require_once 'Interfaces/FlightFactoryInterface.php';
require_once 'Passengers/DomesticPassenger.php';
require_once 'Planes/DomesticPlane.php';

class DomesticFlightFactory implements FlightFactoryInterface
{
  public function createPassenger(): PassengerInterface
  {
    return new DomesticPassenger();
  }

  public function createPlane(): PlaneInterface
  {
    return new DomesticPlane();
  }
}
