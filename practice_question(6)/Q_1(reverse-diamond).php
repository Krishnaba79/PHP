<?php
    for ($i = 4; $i >= 1; $i--) {
        echo str_repeat("&nbsp;", 5 - $i); // Print leading spaces
        echo str_repeat("* ", $i);          // Print stars
        echo "<br>";
    }
    for ($i = 1; $i <= 5; $i++) {
        echo str_repeat("&nbsp;", 5 - $i); // Print leading spaces
        echo str_repeat("* ", $i);          // Print stars
        echo "<br>";
    }    
?>