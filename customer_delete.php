<?php
$servername="localhost";
$username="root";
$password="";
$db="hiral";
// $search=$_POST['search'];

$conn=new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error ";
}

$id=$_GET['id'];
$delete_query="DELETE FROM customer where id='".$id."'";
$delete_data=mysqli_query($conn,$delete_query);
if($delete_data)
{
    echo "Deleted";
}
else
{
    echo "Error";
}

?>