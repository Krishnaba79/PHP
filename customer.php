<?php

$servername="localhost";
$username="root";
$password="";
$db="hiral";

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
    $customer_name=$_POST['customer_name'];
    $area=$_POST['area'];
    $pin_code=$_POST['pin_code'];
    $email=$_POST['email'];
    // $search=$_POST['search'];

$sql="INSERT INTO customer(`customer_name`,`area`,`pin_code`,`email`)
VALUES ('".$customer_name."','".$area."','".$pin_code."','".$email."')";

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
        <label for="customer_name">Customer Name</label>
        <input type="text" id="customer_name" name="customer_name">

        <label for="area">Area</label>
        <input type="text" id="area" name="area">

        <label for="pin_code">Pincode</label>
        <input type="number" id="pin_code" name="pin_code">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <input type="submit" id="submit" value="submit" name="submit">

    </form>
</body>
</html>