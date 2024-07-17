<?php

for ($i=2; $i <= 4 ; $i++) { 
    printSum(getSum(100 * $i, 200));
}

function getSum(int $a, int $b)
{
    return $a + $b;
}

function printSum(int $sum)
{
    echo $sum . PHP_EOL;
}