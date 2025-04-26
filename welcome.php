<?php
session_start();

if ($_SESSION['email']){
    echo "welcome".$_SESSION ['email'];
}
else{
    echo "<script>window.location.href='form.php';</script>";
}