<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $colors=array("red","green","blue");
    sort($colors);
    // print_r($colors);
    $clength=count($colors);
    for($x=0;$x<$clength;$x++)
    {
        echo $colors[$x];
        echo "<br>";
    }

    foreach($colors as $color)
    {
        echo $color . " ";
    }

    echo "<br>";

    // decending order
    rsort($colors);
    print_r($colors);

    echo "<br>";

    //Sort array according to value ascending order
    asort($colors);
    print_r($colors);

    echo "<br>";

    //Sort array according to key ascending order
    $colour=array("1"=>"red","2"=>"green","3"=>"blue");
    ksort($colour);
    print_r($colour);

    echo "<br>";

    //Sort array according to value decending    order
    $colour=array("1"=>"red","2"=>"green","3"=>"blue");
    arsort($colour);
    print_r($colour);

    echo "<br>";

    //Sort array according to key decending order
    $colour=array("1"=>"red","2"=>"green","3"=>"blue");
    krsort($colour);
    print_r($colour);
    ?>

</body>
</html>