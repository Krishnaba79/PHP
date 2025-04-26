<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //while
    $i=10;
    while($i<=50){
        echo $i;
        echo "<br>";
        $i+=10;
    }

    //break & continue statement
    $a=0;
    while($a<6){
        $a++;
        if ($a==3)continue;
        echo $a;
    }
    echo "<br>";

    $b=0;
    while($b<6){
        $b++;
        if($b==3) break;

        echo $b;
        echo"<br>";
    }

    //do while
    $c=8;
    do{
        echo $c;
        $c++;
    }
    while($i<7);
    echo "<br>";

    //for loop with breaak and continue statement
    for ($x=0;$x <100;$x+=10){
        if ($x== 30 ) continue;
        echo "the number is : $x <br>";
    }
    echo"<br>";
    for ($x=0;$x<=100;$x+=10){
        if($x==30)break;
        echo "the number is : $x <br>";
    }

    //for each loop
    $memners = array("peter"=> "35","ben"=>"37","joe"=>"43");
    foreach($memners as $x => $y){
        echo "$x : $y <br> ";
    }
    ?>
</body>
</html>