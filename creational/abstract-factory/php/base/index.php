<?php

require_once 'Interfaces/FlightFactoryInterface.php';
require_once 'Factories/DomesticFlightFactory.php';
require_once 'Factories/InternationalFlightFactory.php';

class AbstractFactoryDemonstration 
{
  protected FlightFactoryInterface $flightFactory;

  public function __construct(String $departure_type = 'Domestic')
  {
    switch ($departure_type) {
      case 'Domestic':
        $this->flightFactory = new DomesticFlightFactory();
        break;

      case 'International':
        $this->flightFactory = new InternationalFlightFactory();
        break;
      
      default:
        $this->flightFactory = new DomesticFlightFactory();
        break;
    }
  }

  public function demonstrate()
  {
    $passenger = $this->flightFactory->createPassenger();
    $plane = $this->flightFactory->createPlane();
    return $passenger->situation('Maria').' '.$plane->takeOff('AIRBUS-A340');
  }
}

$abstractFactoryDemonstration = new AbstractFactoryDemonstration('International');

echo $abstractFactoryDemonstration->demonstrate();