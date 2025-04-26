<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "dharm";

        $conn = new mysqli("$servername","$username","$password","$db");

        if($conn)
        {
            echo "Connected";
        }
        else
        {
            echo "Error!";
        }
?>