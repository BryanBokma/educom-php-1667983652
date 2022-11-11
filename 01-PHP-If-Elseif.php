<?php
// PHP The if statement
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}//end if statement

//PHP The if-else statement
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}// end if statement

else {
    echo "Have a good night!";
}// end else statement

//PHP The if-else-if-else statement
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
}// end if statement

elseif ($t < "20") {
    echo "Have a good day";
}//end else-if statement

else {
    echo "Have a good night!";
}// end else statement

//PHP Exercise
$a = 50;
$b = 10;

if($a > $b) {
    echo "Hello world";
}