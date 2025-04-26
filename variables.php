<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $txt = "W3schools.com";
    echo "I love $txt";
    echo "<br>";
    echo "I Love" .$txt. "!";

    echo "<br>";
    $x = 5;
    $y = 10;
    echo $x + $y;

    echo "<br>";
    $a = 5;      // $x is an integer
    $b = "John"; // $y is a string
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

    $c = 5;
    var_dump($c);
    echo "<br>";
    var_dump(5);
    echo "<br>";
    var_dump("John");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([2,3,56]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";
    $p = $q = $r = "Fruit";
    echo $r;
    ?>
</body>
</html>