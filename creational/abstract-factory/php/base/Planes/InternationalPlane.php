<?php

require_once 'Interfaces/PlaneInterface.php';

class InternationalPlane implements PlaneInterface
{
  public function takeOff(String $name) : String
  {
    return 'O avião '.$name.', que irá fazer um vôo internacional irá decolar!';
  }
}