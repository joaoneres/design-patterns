<?php

require_once 'PrinterFactory.php';
require_once 'Interfaces/PrinterInterface.php';
require_once 'Classes/SimplePrinter.php';

class SimplePrinterFactory extends PrinterFactory 
{
  public function createPrinter(): PrinterInterface
  {
    return new SimplePrinter();
  }
}