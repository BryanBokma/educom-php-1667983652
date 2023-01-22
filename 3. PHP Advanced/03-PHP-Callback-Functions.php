<!DOCTYPE html>
<html>
<body>

<?php
// Callback Functions voorbeeld 1
// Pass a callback to PHP's array_map() function to calculate the length of every string in an array
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

<?php
// Calback Function voorbeeld 2 
// Use an anonymous function as a callback for PHP's array_map() function:
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>

<?php
// Callbacks in User Defined Functions
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>

</body>
</html>
