<?php
// Voorbeeld 1
echo $cars[0][0].": In stock ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// Voorbeeld 2 (a for loop inside another for loop to get the elements of the $cars array)
for ($row = 0; $row < 4; $raw++) {
    echo "<p><b>Row number $raw</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$raw][$col]."</li>";
    }
    echo "</ul>";
}
?>