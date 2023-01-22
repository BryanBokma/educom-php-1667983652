<?php
// Voorbeeld 1
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

// Voorbeeld 2
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

// Voorbeeld 3 outputs the dates for the next six Saturdays 
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date ("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

// Voorbeeld 4 outputs the number of days until 4th of July
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days untile 4th of July";

//exercise 
echo date("l");
?>