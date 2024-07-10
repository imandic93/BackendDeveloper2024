<?php

$users = [
    [
        'name' => 'Ivan',
        'surname' => 'Mandic',
        'age' => 31,
        'gender' => 'm'
    ],
    [
        'name' => 'Marko',
        'surname' => 'Maric',
        'age' => 33,
        'gender' => 'm'
    ]
];

print_r($users) . PHP_EOL;

unset($users[0]['gender'], $users[1]['gender']);

print_r($users) . PHP_EOL;

$users[] = [
    'name' => 'Ana',
    'surname' => 'Anic',
    'age' => 35,
];

print_r($users) . PHP_EOL;