<?php
function printNumberDiamond($n) {
    // Upper half of the diamond
    for ($i = 1; $i <= $n; $i++) {
        // Print leading spaces
        for ($j = $n - $i; $j >= 1; $j--) {
            echo "&nbsp;&nbsp;";
        }
        // Print numbers in ascending order
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        // Print numbers in descending order
        for ($j = $i - 1; $j >= 1; $j--) {
            echo $j;
        }
        echo "<br>";
    }
}
    $n = 6;
    printNumberDiamond($n);

?>