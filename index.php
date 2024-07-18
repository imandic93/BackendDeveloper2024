<?php

function getSum(...$numbers)
{
    static $sum = 0;

    foreach($numbers as $number){
        $sum += $number;
    }

    return $sum;
}

$function = 'getSum';

echo $function(10,20,30,40,50) . PHP_EOL;
echo $function(10,20,30,40,50) . PHP_EOL;
echo $function(10,20,30,40,50) . PHP_EOL;

$greeting = 'Hello world!';

function sayHello()
{
    echo $GLOBALS['greeting'] . PHP_EOL; 
}

sayHello();