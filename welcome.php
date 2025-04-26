<?php
session_start();

if($_SESSION['email'])
{
    echo "welcome".$SESSION['email'];
}
else
{
    echo "<script>window.location.href='form.php';</script>";
}
?>
