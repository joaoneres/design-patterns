<?php

require_once 'Interfaces/PassengerInterface.php';

class InternationalPassenger implements PassengerInterface
{
  public function situation(String $name) : String
  {
    return $name.' é um passageiro internacional e pode embarcar a qualquer momento.';
  }
}