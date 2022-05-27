<?php

require_once 'Singletons/ExampleSingleton.php';

$example_singleton = ExampleSingleton::getInstance();

var_dump($example_singleton);