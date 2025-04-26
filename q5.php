
<?php
//Write a PHP program to reverse the string
$str = "krishnaba solanki";
$len = strlen($str);
$reversed_str = "";

for ($i=$len-1; $i>=0; $i--) {
    $reversed_str .= $str[$i];
}

echo "ans is : $reversed_str";
?>