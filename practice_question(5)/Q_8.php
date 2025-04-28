<?php
function joinArrayWithSeparator($arr, $separator) {
    if (!is_array($arr)) {
        return "Input is not an array.";
    }
    $result = implode($separator, $arr);
    return $result;
}
$array = ["apple", "banana", "orange"];
$separator = ", ";
echo joinArrayWithSeparator($array, $separator);
?>
