<?php

require_once 'TransportFactory.php';
require_once 'Interfaces/TransportInterface.php';
require_once 'Transports/Truck.php';

class TruckFactory extends TransportFactory
{
	public function createTransport(String $name, String $reference, Int $currentPosition, Int $efficiencyPerMinute) : TransportInterface
	{
		return new Truck($name, $reference, $currentPosition, $efficiencyPerMinute);
	}
}