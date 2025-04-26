<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $x=12;
    $z=45;

    if($x==12 &&  ($z==43 || $z==45))
    {
        echo "right";
    }
    else
    {
        echo "no";
    }

    echo "<br>";

    if($x!=12)
    {
        echo "Value is not 11";
    }
    else
    {
        echo "Value is 11";
    }

    ?>

</body>
</html>