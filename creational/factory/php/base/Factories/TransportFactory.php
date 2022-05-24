<?php

require_once 'Interfaces/TransportInterface.php';

abstract class TransportFactory
{
	abstract public function createTransport(String $name, String $reference, Int $currentPosition, Int $efficiencyPerMinute): TransportInterface;

	// Esta classe pode prover lógica também. Ou seja, podemos ter funções que direcionem necessidades para a classe 
	// dentro deste arquivo.
}
