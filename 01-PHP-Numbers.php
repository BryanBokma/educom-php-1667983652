<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));//PHP Integers

$x = 10.365;
var_dump(is_float($x));//PHP Floats

$x = 1.9e411;
var_dump($x);//PHP infinity

$x = acos(8);
var_dump($x);//PHP NaN

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));//PHP Numerical Strings

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>