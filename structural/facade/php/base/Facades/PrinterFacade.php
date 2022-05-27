<?php

require_once 'Classes/SimpleReportExport.php';

class PrinterFacade
{
  public function simpleReport(String $head, String $line, Array $columnLine, String $footer): String
  {
    return (new SimpleReportExport($head, $line, $columnLine, $footer))->build();
  }
}