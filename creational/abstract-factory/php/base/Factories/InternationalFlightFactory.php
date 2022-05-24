<?php

require_once 'Passengers/InternationalPassenger.php';
require_once 'Planes/InternationalPlane.php';
require_once 'Interfaces/FlightFactoryInterface.php';

class InternationalFlightFactory implements FlightFactoryInterface
{
  public function createPassenger(): PassengerInterface
  {
    return new InternationalPassenger();
  }

  public function createPlane(): PlaneInterface
  {
    return new InternationalPlane();
  }
}
