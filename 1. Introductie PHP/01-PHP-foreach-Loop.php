<?php
// For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

// The following example will output the values of the given array
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

// Voorbeeld 2 
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}
?>