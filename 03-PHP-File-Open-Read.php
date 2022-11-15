<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets ($myfile) . "<br>";
}
fclose($myfile);

// Laatste voorbeeld
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);

// Exercise
$myfile = fopen("webdict.txt", "r");
while(!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);
?>