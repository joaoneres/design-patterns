<?php

require 'PrinterFactory.php';
require 'Interfaces/PrinterInterface.php';
require 'Classes/ComplexPrinter.php';

class ComplexPrinterFactory extends PrinterFactory 
{
  public function createPrinter(): PrinterInterface
  {
    return new ComplexPrinter();
  }
}