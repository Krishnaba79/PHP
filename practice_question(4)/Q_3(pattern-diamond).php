<?php
    for ($i=4; $i >=1 ; $i--) { 
        for ($j=$i; $j > 0 ; $j--) { 
            echo " * ";
        }
        echo "<br>";
    }
?>

<?php

// Upper half of the diamond
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat("&nbsp;", 5 - $i); // Print leading spaces
    echo str_repeat("* ", $i);          // Print stars
    echo "<br>";
}

// Lower half of the diamond
for ($i = 4; $i >= 1; $i--) {
    echo str_repeat("&nbsp;", 5 - $i); // Print leading spaces
    echo str_repeat("* ", $i);          // Print stars
    echo "<br>";
}

?>
