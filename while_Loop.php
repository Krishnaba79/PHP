<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $i=10;
    while($i <= 100)
    {
        echo $i;
        $i+=10;
        echo "<br>";
    }

    echo "<br>";

    $y=0;
    while($y < 6)
    {
        $y++;
        if($y==3)break;
        echo $y;
        echo "<br>";
    }

    echo "<br>";

    $x=0;
    while($x < 6)
    {
        $x++;
        if($x==3) continue;
        echo $x;
        echo "<br>";
    }

    // $a=1;
    // while($a=)
    // {

    // }
    ?>

</body>
</html>