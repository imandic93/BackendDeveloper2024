<?php

$booksJson = file_get_contents('knjige.json');

$books = json_decode($booksJson, true);

$books[] = [
    'title' => 'One Hundred Years of Solitude',
    'author' => 'Gabriel Garcia Marquez',
    'pages' =>  457,
    'available' =>  true
];

$booksJson = json_encode($books);

if (!file_put_contents('knjige.json', $booksJson)) {
    echo 'Failed storing JSON to file' . PHP_EOL;
} else {
    echo 'Stored JSON to file!' . PHP_EOL;
}