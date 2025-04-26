<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php

        // $cars=array("one","two","three");
        // echo $cars[2];

        // $cars[3]="red";
        // $cars[4]="green";
        // $cars[10]="yellow";

        // array_push($car,"Blue");
        // var_dump($car)

        // $cars=array("one","two","three");
        // array_splice($cars,1,1);
        // var_dump($cars)
        // array_Diff

        $car=array("abc"=>"bmw","xyz"=>"audi","ABC"=>"Ford");
        $newarray=array_diff($car,["bmw","ford"]);
        var_dump($newarray)
        ?>
    </pre>
</body>
</html>