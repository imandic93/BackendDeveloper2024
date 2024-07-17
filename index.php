<?php

function makeyogurt(
    $container = "bowl", 
    $flavour = "raspberry", 
    $style = "Greek",
)
{
    return "Making a $container of $flavour $style yogurt.\n";
}

echo makeyogurt(flavour: 'apple');


// function makecoffee($type = "cappuccino")
// {
//     return "Making a cup of $type.\n";
// }
// echo makecoffee() . PHP_EOL;
// echo makecoffee(null) . PHP_EOL;
// echo makecoffee("espresso") . PHP_EOL;

// function getSum(&$sum, ...$numbers)
// {
//     foreach ($numbers as $number) {
//         $sum += $number;
//     }
// }

// function printSum(int $sum)
// {
//     echo $sum . PHP_EOL;
// }

// $sum = 0;

// getSum($sum, 100, 200, 300, 400, 500);
// getSum($sum, 100, 10000);

// printSum($sum);