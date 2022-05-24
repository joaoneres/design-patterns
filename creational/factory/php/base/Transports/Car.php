<?php

require_once 'Interfaces/TransportInterface.php';

class Car implements TransportInterface
{
	public function __construct(String $name, String $reference, Int $currentPosition, Int $efficiencyPerMinute)
	{
		$this->name = $name;
		$this->reference = $reference;
		$this->currentPosition = $currentPosition;
		$this->efficiencyPerMinute = $efficiencyPerMinute;
	}

	public function startDelivery(Int $finalPosition)
	{
		return 'Delivery started!';
	}

	public function statusDelivery()
	{
		return 'Delivery is running!';
	}

	public function stopDelivery()
	{
		return 'Delivery is stopped!';
	}

	public function finishDelivery()
	{
		return 'Delivery completed!';
	}
}
