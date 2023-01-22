<?php
// Constant with a case-sensitive
define("GREETING", "Welcome to Github.com!");
echo GREETING;

// Constant with a case-insensitive
define("GREETING", "Welcome to Github.com!", true);
echo greeting;

// PHP Constant Arrays
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];

// Constants are Global
define("GREETING", "Welcome to Github.com!");

function myTest() {
    echo GREETING;
}// end function myTest

myTest();
?>