<?php
$array1 = array("a", "b", "c", "d");
$array2 = array("b", "c", "e");

$differences = array_diff($array1, $array2);

print_r($differences);
?>
