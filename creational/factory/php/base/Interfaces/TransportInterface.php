<?php

interface TransportInterface
{
	public function startDelivery(Int $finalPosition);
	public function statusDelivery();
	public function stopDelivery();
	public function finishDelivery();
}
