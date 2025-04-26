<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function myfunction()
    {
        echo "this text comes from a function";
    }

    $Array=array("krishnaba",20,["volvo","bmw"],myfunction());

    $Array[3]();
    ?>
</body>
</html>