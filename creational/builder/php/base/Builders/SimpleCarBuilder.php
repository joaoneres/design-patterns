<?php

require_once 'Models/CarModel.php';
require_once 'Models/TripModel.php';

class SimpleCarBuilder
{
  private CarModel $car;
  private static $instance = null;
 
  public static function instance()
  {
    if (self::$instance == null)
    {
      self::$instance = new SimpleCarBuilder();
    }
 
    return self::$instance;
  }

  public function __construct()
  {
    $this->reset();
  }

  public function reset(): void
  {
    $this->car = new CarModel();
  }
  
  public function name(String $name) : SimpleCarBuilder {
    $this->car->name = $name;
    return $this;
  }
    
  public function type(String $type) : SimpleCarBuilder {
    $this->car->type = $type;
    return $this;
  }

  public function addTrip(String $destination) : SimpleCarBuilder {
    array_push($this->car->trips, new TripModel($destination));
    return $this;
  }

  public function build() : CarModel {
    return $this->car;
  }
}
