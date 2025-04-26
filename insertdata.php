<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter Your Id:</label>
        <input type="number" name="id"><br>
        <label>Enter Your Name:</label>
        <input type="text" name="name"><br>
        <label>Enter Your Email:</label>
        <input type="email" name="email"><br>
        <label>Enter Your City:</label>
        <input type="text" name="city"><br>
        <label>Enter Your country:</label>
        <input type="text" name="country"><br>
        <label>Enter Your Pincode:</label>
        <input type="number" name="pincode"><br>
        <label>Enter Your Salary:</label>
        <input type="number" name="salary"><br>

        <input type="submit" name="submit">

    </form>
</body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "dharm";

    $conn = new mysqli("$servername","$username","$password","$db");

    if($conn)
    {
        echo "Connected";
        echo "<br>";
    }
    else{
        echo "Error!";
    }

    if(isset($_POST['submit']))
    {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $salary = $_POST['salary'];

        $sql = "INSERT INTO shah (`id`,`name`,`email`,`city`,`country`,`pincode`,`salary`)
        VALUES ('".$id."','".$name."','".$email."','".$city."','".$country."','".$pincode."','".$salary."')";

        $insert = $conn->query($sql);

        if($insert)
        {
            echo "Data Inserted";
        }
        else{
            echo "Error!";
        }
        
    }
?>