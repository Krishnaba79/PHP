<?php

$servername="localhost";
$username="root";
$password="";
$db="princy";

$conn=new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error 404 not found";
}

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file("$tmp_name","img/".$image_name);

    $sql = "INSERT INTO abc(`name`,`image_name`)
    VALUES('".$name."','".$image_name."')" ;
    $insert=$conn->query($sql);
    if($insert)
    {
        echo "New record created";
    }
    else
    {
        echo "Error 404 not found";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <input type="file" id="image" name="image">

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>