<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="profile_image">Profile Image:</label>
        <input type="file" name="profile_image" required><br>
        <button type="submit">Login</button>
    </form>


    <?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "student";

$conn = new mysqli($servername, $username, $password, $db);
if($conn){
    echo "database connected";
    echo "<br>";
}else{
    echo "error";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $profile_image = $_FILES["profile_image"]["name"];

    if ($username == "admin" && $password == "godsgift") {
        $_SESSION["username"] = $username;
        $_SESSION["profile_image"] = $profile_image;

        // Update
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], "uploads/". $profile_image);
        $sql="INSERT INTO student_details(`username`,`password`,`profile_image`)
        VALUES('".$username."','".$password."','".$profile_image."')";
        $insert=$conn->query($sql);
        if($insert){
            echo "new record created";
            echo "<br>";
        }
        else{
            echo "error";
        }
        // Display welcome message
        echo "Welcome, ". $username. "! Your profile image has been updated.";
        echo "<br>";
    } else {
        // Display an error
        echo "Invalid username or password. Please try again.";

    }
}

?>
</body>
</html>

