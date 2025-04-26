<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //string variable
    $name="john";

    //integer
    $age=20;

    //float
    $price=19.00;

    //boolean
    $isStudent=true;

    //array
    $colors=array("red","green","blue");

    echo "<br>";

    echo $name,$age,$price,$isStudent;
    ?>

    <?php

    $greeting="hello";
    $name="john";

    $message=$greeting.",".$name."!";
    echo $message;

    $a="krishna";
    $b="solanki";
    $c=$a.=$b;
    echo $c;
    ?>
</body>
</html>