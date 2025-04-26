<?php
function removeElementByValue($array, $value) {
    $index = array_search($value, $array);
    if ($index !== false) {
        array_splice($array, $index, 1);
    }
    return $array;
}

// Example usage:
$array = [1, 2, 3, 4, 5];
$valueToRemove = 3;
print_r($array);
echo "<br>";
$newArray = removeElementByValue($array, $valueToRemove);
print_r($newArray);
?>