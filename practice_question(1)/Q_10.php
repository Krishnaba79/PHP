<?php 

    $variable = 3;
    $num1 = 50;
    $num2 = 50;


    switch ($variable) {
        case '1':
            $sum = $num1+$num2;
            echo "The addition of the numbers is ".$sum;
            break;
        case '2':
            $sum = $num1-$num2;
            echo "The subtraction of the numbers is ".$sum;
            break;
        case '3':
            $sum = $num1*$num2;
            echo "The multiply of the numbers is ".$sum;
            break;
        case '4':
            $sum = $num1/$num2;
            echo "The division of the numbers is ".$sum;
            break;  
        default:
            echo "Enter the valid number";
            break;
    }

?>