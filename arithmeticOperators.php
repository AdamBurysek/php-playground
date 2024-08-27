<?php

// Arithmetic operators
// + - * / %

$x = 10;
$y = 5;
$z = null;

//$z = $x + $y;
//$z = $x - $y;
//$z = $x * $y;
//$z = $x / $y;
//$z = $x % $y;

//$z = $x ** $y;


echo $z;

$counter = 0;

//$counter++;
//$counter--;
//$counter += 5;
$counter -= 5;

echo $counter;

// Operator precedence

//$total = 1 + 2 * 3 - 4 / 5 % 6;
// 1 + (2 * 3) - (4 / 5) % 6
$total = 1 + (2 * 3) - (4 / 5) % 6;
echo $total;
