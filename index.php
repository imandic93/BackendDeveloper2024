<?php

require './app/osoba.php';
require './app/polaznik.php';
require './app/predavac.php';

$polaznik = new Polaznik();
$polaznik->setIme('ivan');

$polaznik2 = new Polaznik();

$predavac = new Predavac();
$predavac->setIme('Ivan');
$predavac->setPrezime('Mandic');

echo $polaznik->sayHello(), "\n";
echo $polaznik2->sayHello(), "\n";
echo $predavac->sayHello(), "\n";