<?php

require_once 'TransportFactory.php';
require_once 'Interfaces/TransportInterface.php';
require_once 'Transports/Car.php';

class CarFactory extends TransportFactory
{
	public function createTransport(String $name, String $reference, Int $currentPosition, Int $efficiencyPerMinute): TransportInterface
	{
		return new Car($name, $reference, $currentPosition, $efficiencyPerMinute);
	}
}
