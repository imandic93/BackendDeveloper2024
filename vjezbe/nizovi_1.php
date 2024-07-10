<?php

$primeNumbers = [2, 3, 5, 7, 11];

var_dump(isset($primeNumbers[2]));

echo $primeNumbers[2] . PHP_EOL;

$primeNumbers[] = 13;

echo count($primeNumbers) . PHP_EOL;

print_r($primeNumbers) . PHP_EOL;

arsort($primeNumbers);

print_r($primeNumbers);