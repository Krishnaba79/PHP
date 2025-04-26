<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "form";

    $conn = new mysqli("$servername","$username","$password","$db");

    if($conn)
    {
        echo "Database Connection";
    }
    else
    {
        echo "Error!";
    }

    if(isset($_POST['submit']))

    {
        $password = $_POST['password'];
        $email = $_POST['email'];

        $select_query = "SELECT * FROM information WHERE email='".$email."' AND password ='".$password."' ";
        $select_data = mysqli_query($conn,$select_query);
        $row = mysqli_fetch_array($select_data);
// print_r($row);
// exit;
        if($row)
        {
            $_SESSION['email'] = $row['email'];
            echo "<script>window.location.href='welcome.php';</script>";
        }
        else
        {
            echo "Invalid";
        }
    }
    ?>

    <form method="POST">
        <lable>Enter Your Password: </lable>
        <input type="password" id="password" name="password">

        <lable>Enter Your Email: </lable>
        <input type="email" id="email" name="email">

        <input type="submit" id="submit" name="submit" value="submit">
    </form>
    Code Suggestions
</body>
</html>