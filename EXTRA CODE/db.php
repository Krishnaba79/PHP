<?php
 $servername="localhost";
 $username="root";
 $password="";
 $db="login_db";

 $conn=new mysqli("$servername","$username","$password","$db");
 if($conn){
     echo "database connected";
 }else{
     echo "Not Connected";

 }

?>