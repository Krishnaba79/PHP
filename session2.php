<?php
session_start();

?>

<html>
    <body>
        echo "my name is ".$_SESSION['name'];
        echo "<br>";
        echo "session is set";
    </body>
</html>