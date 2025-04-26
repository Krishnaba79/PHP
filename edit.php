<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dharm";

$conn = new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Conected";
}
else
{
    echo "Error!";
}

$update_query = "UPDATE shah SET `id`= '".$id."', `name` ='".$name."', `email`= '".$email."',`city`='".$city."', `country` = '".$country."' , `pincode`='".$pincode."'";
$update_data = mysqli_query($conn,$update_query);

if($update_data)
{
    echo " Updated";
}
else
{
    echo " Error!";
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
    <form method="post" enctype="multipart/from-data">
        <lable for="id">ID</lable>
        <input type="num" id="id" name="id" value="<?php echo $row['id']?>">

        <lable for="name">Name</lable>
        <input type="text" id="name" name="name" value="<?php echo $row['name']?>">

        <lable for="name">Email</lable>
        <input type="text" id="name" name="email" value="<?php echo $row['email']?>">

        <lable for="name">City</lable>
        <input type="text" id="name" name="city" value="<?php echo $row['city']?>">

        <lable for="name">Country</lable>
        <input type="text" id="country" name="country" value="<?php echo $row['country']?>">

        <lable for="pincode">pincode</lable>
        <input type="num" id="pincode" name="pincode" value="<?php echo $row['pincode']?>">

        <input type="submit" id="update" name="update" value="update">
    </form>
</body>
</html>