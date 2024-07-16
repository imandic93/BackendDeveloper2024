<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as &$number) {
    $number = $number * $number;
    // echo $number . PHP_EOL;
}

var_dump($numbers);

// $i = 0;
// do {
//     echo $numbers[$i] . PHP_EOL;
//     $i++;
// } while ($i < count($numbers));

// $i = 0;
// while ($i < count($numbers)) {
//     echo $numbers[$i] . PHP_EOL;
//     $i++;
// }

// for ($i = 0; $i < count($numbers); $i++) {
//     echo $numbers[$i] . PHP_EOL;
// }

// for ($a = 1; $a <= 10; print $a++ . PHP_EOL) {}

// $a = 1;

// while ($a <= 10) {
//     echo $a++ . PHP_EOL;
// }

// do {
//     echo $a++ . PHP_EOL;
// } while ($a <= 10);