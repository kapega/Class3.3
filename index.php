<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'autoloader.php';
$loader = new Psr4AutoloaderClass();
$loader->addNamespace('Ekaterina\\Interfaces', 'Ekaterina/Interfaces');
$loader->addNamespace('Ekaterina\\Classes', 'Ekaterina/Classes');

require 'test.php'; // вёрстка
