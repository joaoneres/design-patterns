<?php

interface CarInterface
{
  public function getPrice(): Float;
  public function getName(): String;
  public function getDescription(): String;
}