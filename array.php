<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // function myfunction()
    // {
    //     echo "this text comes from a function";
    // }
    // $Array=array("krishnaba",20,["volvo","bmw"],myfunction());
    // $Array[3];
    // $Array[1];
    // echo "<br>";
    //array index
    // $colors=array("red","green","blue");
    // echo $colors[0];
    // echo "<br>";
    // echo $colors[1];
    // echo "<br>";
    // echo $colors[2];
    // echo "<br>";
    
    //push
    // $cars[3]="red";
    // $cars[4]="green";
    // $cars[10]="yellow";
    
    // array_push($cars,"blue");
    // print_r($cars);
    // echo "<br>";
    // array difference(remove array element)

    // $car=array("abc"=>"bmw","xyz"=> "audi","ABC"=>"ford");
    // $newarray=array_diff($car,["bmw","ford"]);
    // print_r($newarray);

    //asosiative array

    // echo "<br>";
    // $color=array("1"=>"red","2"=>"green","3"=> "blue");
    // asort($color);
    // ksort($color);
    // arsort($color);
    // print_r($color);

    // echo"<br>";
    // using each loop

    // foreach($color as $key=>$value){
    //     echo "$key=>$value";
    // }

    echo "<br>";

    //using for loop

    $color=array("1"=>"red","2"=>"green","3"=>"blue");
    for ($i=1;$i<=count($color);$i++){
        echo $i."=>";
        echo $color[$i],"<br>";
    }
    ?>
</body>
</html>