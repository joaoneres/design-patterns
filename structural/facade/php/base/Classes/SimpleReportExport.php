<?php

require_once 'Factories/SimplePrinterFactory.php';

class SimpleReportExport
{
  public $head, $line, $columnLine, $footer, $text = '';
  public SimplePrinterFactory $simple_printer_factory;

  public function __construct(String $head, String $line, array $columnLine, String $footer)
  {
    $this->head = $head;
    $this->line = $line;
    $this->columnLine = $columnLine;
    $this->footer = $footer;

    $this->simple_printer_factory = new SimplePrinterFactory();
  }

  public function build(): String
  {
    $simple_printer = $this->simple_printer_factory->createPrinter();

    $this->text
      = PHP_EOL . $simple_printer->dashedLine() . PHP_EOL
      . $simple_printer->head($this->head) . PHP_EOL
      . $simple_printer->line($this->line) . PHP_EOL
      . $simple_printer->columnLine($this->columnLine) . PHP_EOL
      . $simple_printer->footer($this->footer) . PHP_EOL;

    return $this->text;
  }
}
