<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <lable>Enter your Name</lable>
        <input type="text" name="name" ><br>

        <lable>Enter your Email ID</lable>
        <input type="email" name="email" ><br>


        <lable>Enter your Password</lable>
        <input type="text" name="password" ><br>

        <input type="submit" name="submit" value="login" >
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $name =$_POST['name'];
            $email =$_POST['email'];
            $password =$_POST['password'];

            $SESSION['name'] = $name;
            $SESSION['email']=$email;
            $SESSION['password']=$password;

            echo "You are login with the name \" ".$SESSION['name']."\" and your Email Id is \" ".$SESSION['email']." \": ";

        }
    ?>
</body>
</html>