<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!== true) 
{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Welcome, <?= $_SESSION["username"]?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>