<?php

require_once 'Interfaces/PrinterInterface.php';

class SimplePrinter implements PrinterInterface
{
  private Int $characters_size = 64;

  public function dashedLine(): String
  {
    return str_pad('', $this->characters_size, '-', STR_PAD_RIGHT);
  }

  public function head(String $head): String
  {
    $left_head = '>> ';
    $right_head = ' <<';
    $head = substr($head, - $this->characters_size + strlen($left_head) + strlen($right_head));
    return $left_head.mb_strtoupper($head, 'UTF-8').$right_head;
  }

  public function line(String $line): String
  {
    return substr($line, - $this->characters_size);
  }

  public function columnLine(Array $data, Bool $head = false): String
  {
    $line = '';
    $column_size = $this->characters_size / count($data);

    foreach($data as $subline) {
      $processed_subline = substr($subline, - $column_size);
      $line .= str_pad($processed_subline, $column_size, ' ', STR_PAD_RIGHT);
    }

    return $line;
  }

  public function footer(String $message): String
  {
    $left_footer = '*** ';
    $right_footer = ' ***';
    $head = substr($message, - $this->characters_size + strlen($left_footer) + strlen($right_footer));
    return $left_footer.mb_strtoupper($head, 'UTF-8').$right_footer;    
  }
}
