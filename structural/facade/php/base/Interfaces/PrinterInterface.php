<?php

interface PrinterInterface
{
  public function dashedLine(): String;
  public function head(String $head): String;
  public function line(String $line): String;
  public function columnLine(Array $data, Bool $head = false): String;
  public function footer(String $message): String;
}
