<?php

$food = 'orange';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
    default => 'Unknown food'
};

var_dump($return_value);


$age = 20;

switch ($age) {
    case 18:
        echo "Punoljetni ste! Smijete pregledavati naše proizvode!" . PHP_EOL;
        break;

    case 17:
        echo 'Vratite se za godinu dana!' . PHP_EOL;
        break;

    case 16:
    case 15:
        echo 'Vratite za par godina!' . PHP_EOL;
        break;
    
    default:
        echo "Nemate dovoljno godina za prisupiti nasem webu!" . PHP_EOL;
        break;
}

if ($age >= 18) {
    echo "Punoljetni ste! Smijete pregledavati naše proizvode!" . PHP_EOL;
} elseif ($age === 17) {
    echo 'Vratite se za godinu dana!' . PHP_EOL;
} elseif ($age >= 15) {
    echo 'Vratite za par godina!' . PHP_EOL;
} else {
    echo "Nemate dovoljno godina za prisupiti nasem webu!" . PHP_EOL;
}