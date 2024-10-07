<?php

require './machine.php';
require './car.php';
require './honda.php';
require './ford.php';
require './computer.php';

$honda = new Honda();
$honda->turnOn();
$honda->turnOff();

$ford = new Ford();
$ford->turnOn();
$ford->turnOff();

$computer = new Computer();
$computer->turnOn();
$computer->turnOff();