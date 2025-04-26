<?php
 //5 Write a program to check student grade based on marks
    
 $Studentmarks = 25;

 if ($Studentmarks>=60)
 {
     $grade = "First Division";
 }
 else if($Studentmarks>=45)
 {
     $grade = "Second Division";
 }
 else if($Studentmarks>=33)
 {
     $Studentgrade = "Third Division";
 }
 else
 {
     $Studentgrade = "Fail";
 }
 
 echo "Student grade: $Studentgrade";
 
 echo "<br>";
?>