<?php
function printDiamond($size) {
    $char = 'A';
    $charCode = ord($char);

    for ($i = 0; $i < $size; $i++) {
        for ($j = $size; $j > $i + 1; $j--) {
            echo "&nbsp;&nbsp;";
        }

        for ($k = 0; $k <= $i; $k++) {
            echo chr($charCode + $k) . "&nbsp;";
        }

        for ($k = $i - 1; $k >= 0; $k--) {
            echo chr($charCode + $k) . "&nbsp;";
        }

        echo "<br>";
    }
}
$size = 5;
printDiamond($size);
?>
