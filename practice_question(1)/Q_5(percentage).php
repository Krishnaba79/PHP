<?php 

    $maths = 90;
    $science = 60;
    $english = 10;

    $sum = $maths+$science+$english;
    // echo $sum;

    $percentage = ($sum/300)*100;
    echo "The Percentage of the student is = ".$percentage."; <br>";

    if($percentage >=60){
        echo " Grade will be First Division.";
    }
    elseif ($percentage >=45 && $percentage <=59) {   
        echo " Grade will be Second Division.";
    }
    elseif ($percentage >=33 && $percentage <=44) {   
        echo " Grade will be Third Division.";
    }
    elseif ($percentage <= 33) {   
        echo " student will be Fail.";
    }

?>