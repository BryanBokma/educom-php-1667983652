<?php
// PHP break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }//end if
    echo "The number is: $x <br>";
}// end for

// PHP continue 
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }//end if 
    echo "The number is: $x <br>";
}//end for
?>