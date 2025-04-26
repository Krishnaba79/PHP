<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $servername="localhost";
    $username="root";
    $password="";
    $db="dharm";

    $conn=new mysqli("$servername","$username","$password","$db");
    if($conn){
        echo "database connected";
    }else{
        echo "error";
    }
    if(isset($_POST['submit'])){
        $row=mysqli_fetch_array($select_data);

        if ($row){
            $_SESSION['email']=$row['email'];
            echo"<script>window.location.href='welcome';</script>";
        }
        else{
            echo "invalid";
        }
        }
    ?>
<form method ="post">
    <label > enter your password:</label>
    <input type ="password" id="password" name="password">

    <label> enter your email: </label>
    <input type = "email" id="email" name="email">

    <input type = "submit" name="submit" id="submit">
</form>
    
</body>
</html>