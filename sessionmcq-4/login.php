<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password') 
{
    $_SESSION['loggedin'] = true;
    header('location:dashboard.php');
} 
else 
{
    echo "Invalid username or password";
}
?>