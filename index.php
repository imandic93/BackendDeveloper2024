<?php

$array = [1, 2, 3];
$array2 = [
    'name' => 'Ivan',
    'age' => 31,
    'skills' => ['PHP', 'MySQL', 'Linux']
];
$array3 = [4, 5, 6];

$array[] = 4;
$array2['gender'] = 'm';

$originalArray = $array;
krsort($array);

['name' => $name, 'age' => $age, 'skills' => $skills] = $array2;

var_dump(
    $array, 
    $originalArray,
    array_keys($array2),
    array_values($array2),
    count($array),
    array_merge($originalArray, $array3),
    $name,
    $age,
    $skills
);