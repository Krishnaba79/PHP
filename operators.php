<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //logical op.
    $x=12;
    $z=45;
    if($x==12 && ($z==43 || $z==45)){
        echo "right";
    }
    else{
        echo "no";
    }
    echo "<br>";

    if($x!=12){
        echo "my value is not 11";
    }
    else{
        echo "my value is 11";
        }

        //ternary op.
        $m=2;
        echo "<br>";

        echo ($m!=2)?"my value is 2":"my value is not 2";
        //
        ?>
</body>
</html>