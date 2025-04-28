<?php 
echo "Q-1 <br>";
$str = "Hello, world!";
echo $str."<br>";
$length = strlen($str);
echo "Length of the string is: $length <br>";
?>

<?php
echo "Q-2 <br> Adding the 4,5";
$arr = [1, 2, 3];
print_r($arr)."<br>";
array_push($arr, 4, 5);
print_r($arr)."<br>";
?>

<?php
echo "<br>";
echo " Q-3 <br> removing the 4,5";
    $arr1 = [1, 2, 3];
    print_r($arr1)."<br>";
    $lastElement = array_pop($arr1);
    echo "Popped element: $lastElement"; 



    echo "<br>";
    echo " Q-4 <br>";
    $str1 = "Hello, world!";
    $sub = substr($str1, 7, 5);
    echo "Substring: $sub"; 



    echo "<br>";
    echo " Q-5 <br>";
    $arr = ["name" => "John", "age" => 30, "city" => "New York"];
    if (array_key_exists("age", $arr)) {
        echo "Age is present in the array.";
    } else {
        echo "Age is not present in the array.";
    }


    echo "<br>";
    echo " Q-6 <br>";
    $arr = ["apple", "banana", "orange"];
    if (in_array("banana", $arr)) {
    echo "Banana is in the array.";
    } else {
    echo "Banana is not in the array.";
    }

    echo "<br>";
    echo " Q-7 <br>";
    $arr = ["apple", "banana", "orange"];
    $str = implode(", ", $arr);
    echo $str; 


    echo "<br>";
    echo " Q-8 <br>";
    $str = "apple,banana,orange";
    $arr = explode(",", $str);
    print_r($arr); // Output: Array ( [0] => apple [1] => banana [2] => orange )

    
    echo "<br>";
    echo " Q-9 <br>";
    echo date("Y-m-d H:i:s"); // Output: Current date and time in the format: 2024-04-10 12:34:56


    echo "<br>";
    echo " Q-10 <br>";
    $arr = [1, 2, 3, 4, 5];
    $sum = array_sum($arr);
    echo "Sum of array elements: $sum"; // Output: Sum of array elements: 15
    
?>