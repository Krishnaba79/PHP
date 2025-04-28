<?php
function checkKeyExists($array, $key) {
    // Check if the array is actually an array
    if (!is_array($array)) {
        return "Input is not an array.";
    }
    
    // Check if the key exists in the array
    if (array_key_exists($key, $array)) {
        return "Key '$key' exists in the array.";
    } else {
        return "Key '$key' does not exist in the array.";
    }
}

// Example usage
$myArray = array("name" => "John", "age" => 30, "city" => "New York");
$keyToCheck = "age";
print_r ($myArray);
echo "<br>";
echo checkKeyExists($myArray, $keyToCheck); // Output: Key 'age' exists in the array.
?>
