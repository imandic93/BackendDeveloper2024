<?php

$a = 5;
$b = &$a;
$b = 10;

var_dump($a, $b);