<?php

require_once 'Interfaces/PlaneInterface.php';

class DomesticPlane implements PlaneInterface
{
  public function takeOff(String $name) : String
  {
    return 'O avião '.$name.', que irá fazer um vôo doméstico irá decolar!';
  }
}