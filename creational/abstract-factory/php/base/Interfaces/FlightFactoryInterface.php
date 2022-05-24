<?php

require_once 'PlaneInterface.php';
require_once 'PassengerInterface.php';

interface FlightFactoryInterface
{
  public function createPassenger(): PassengerInterface;
  public function createPlane(): PlaneInterface;
}