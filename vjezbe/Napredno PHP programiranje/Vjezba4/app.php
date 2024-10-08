<?php

use App\Math\Circle as C;

require './app/Math/constants.php';
require './app/Math/circle.php';

$circle = new C(10);

echo $circle->getArea(), "\n";