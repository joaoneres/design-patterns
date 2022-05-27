<?php

require_once 'Facades/PrinterFacade.php';

$printer_facade = new PrinterFacade();
$report = $printer_facade->simpleReport('HEAD', 'LINE LINE LINE', ['COLUMN', 'COLUMN'], 'FOOTER');
var_dump($report);