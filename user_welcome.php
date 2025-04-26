<?php

session_start();
if($_SESSION['email'])
{
    echo "welcome ".$_SESSION['email'];
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
    <button onclick="window.location.href='user_data.php'">Logout</button>
</body>
</html>