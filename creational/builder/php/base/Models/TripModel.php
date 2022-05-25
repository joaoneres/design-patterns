<?php 

class TripModel 
{
  public $destination;

  public function __construct(String $destination)
  {
    $this->destination = $destination;
  }
}