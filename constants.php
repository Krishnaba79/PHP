<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--syntsx of constants
    define(name,value,case-sensitive)-->
    <?php
    //case - sensitive constant name
    define("GREETING","welcome to w3schools",false);
    echo GREETING;

    const MYCAR = "volvo";
    echo MYCAR;

    echo "<br>";

    //slicing
    $x="krishnaba solanki";
    echo substr($x,4);
    echo "<br>";
    echo substr($x,6,4);
    echo "<br>";
    echo substr($x,-5,3);
    ?>
</body>
</html>