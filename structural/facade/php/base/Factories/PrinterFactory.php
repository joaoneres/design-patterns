<?php

require_once 'Interfaces/PrinterInterface.php';

abstract class PrinterFactory
{
  abstract public function createPrinter(): PrinterInterface;
}