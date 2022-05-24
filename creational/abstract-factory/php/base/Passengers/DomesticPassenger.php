<?php

require_once 'Interfaces/PassengerInterface.php';

class DomesticPassenger implements PassengerInterface
{
  public function situation(String $name) : String
  {
    return $name.' é um passageiro doméstico e pode embarcar a qualquer momento.';
  }
}