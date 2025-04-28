<?php
for ($i= 1; $i <= 5 ; $i++) { 
    for ($k=1; $k <= 2 * (5 - $i) ; $k++) { 
        echo "&nbsp;";
    }
    for ($j=1; $j <= $i ; $j++) { 
        echo "*";
    }
    echo "<br>";
    }
?>