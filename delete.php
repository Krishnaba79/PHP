<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "dharm";

$conn = new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database conected";
}
else
{
    echo "Error!";
}

$id = $_GET['id'];
$delete_query = "DELETE FROM shah WHERE id='".$id."' ";
$delete_data = mysqli_query($conn,$delete_query);

if($delete_data)
{
    echo "  deleted";
}
else{
    echo "  error";
}
?>