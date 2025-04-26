<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "dharm";


$conn = new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database connected";
    echo "<br>";
}

else
{
    echo "Error!";
    echo "<br>";
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
    $unit=$_POST['unit'];

$sql="INSERT INTO product(`name`,`price`,`unit(g/kg)`)
VALUES ('".$name."','".$price."','".$unit."')";

$insert=$conn->query($sql);

    if($insert)
    {
        echo " data inserted";
    }
    else
    {
        echo " connection failed";
    }
    
$select_query = "SELECT * FROM product ORDER BY price DESC";
$select_data = mysqli_query($conn,$select_query);

while($row = mysqli_fetch_array($select_data));
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
    <form action="" method="post">

        ENTER PRODUCT_NAME :
        <input type="text" name="name"><br>

        ENTER PRODUCT_PRICE :
        <input type="number" name="price"><br>

        ENTER UNIT(g/kg) :
        <input type="number" name="unit"><br>

        <input type="submit" name="submit">

    </form>
</body>
</html>