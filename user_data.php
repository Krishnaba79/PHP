<?php

session_start();
$servername="localhost";
$username="root";
$password="";
$db="user";

$conn=new mysqli($servername,$username,$password,$db);

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error 404 Not Found";
}

if(isset($_POST['signin']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    $sql="INSERT INTO user(`email`,`password`)
    VALUES ('".$email."','".$password."')";

    $insert=$conn->query($sql);

    if($insert)
    {
        echo "Data inserted";
    }
    else
    {
        echo "Error";
    }
}

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $select_query="SELECT * FROM user where email='".$email."' AND password='".$password."'";
    $select_data=mysqli_query($conn,$select_query);
    $row=mysqli_fetch_array($select_data);

    if($row)
    {
        $_SESSION['email']=$row['email'];
        echo "<script>window.location.href='user_welcome.php';</script>";
    }
    else
    {
        echo "invalid email and password";
    }
}

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

        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" name="signin" id="signin" value="Signin">
        <input type="submit" name="login" id="login" value="Login">

    </form>

</body>
</html>