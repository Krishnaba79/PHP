<?php

$servername="localhost";
$username="root";
$password="";
$db="abc";

$conn=new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error 404 not found";
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

$sql="INSERT INTO abcd(`name`,`email`,`password`)
VALUES ('".$name."','".$email."','".$password."')";

$insert=$conn->query($sql);

    if($insert)
    {
        echo "data inserted";
    }
    else
    {
        echo "connection failed";
    }
}

?>

<html>
<head><title>Database Connection</title>
</head>

<body>
    <form method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <input type="submit" id="submit" value="submit" name="submit">

    </form>
</body>
</html>