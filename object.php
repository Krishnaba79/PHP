<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x="hello world!";
    $x=null;
    var_dump($x);

    //length
    echo strlen("hello world!");
    echo "<br>";

    //uppercase
    $x="hello world!";
    echo strtoupper($x);
    echo "<br>";

    //lowercase
    $y= "LIJA";
    echo strtolower($y);
    echo "<br>";

    //replace
    $a="hello world!";
    echo str_replace("wolrd", "dolly",$a);
    echo "<br>";

    //reverse
    echo strrev($x);
    ?>
</body>
</html>