<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //call function
    function name(){
        echo " krishnaba solanki";
    }

    name();
    echo "<br>";
    //function argument
    function family($name,$age){
        echo "$name","$age","<br>";
    }
    family("krishnaa","19");

    echo "<br>";

    //default argument
    function setHeight($minheight=50){
        echo "the height is : $minheight <br>";
    }
    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    //returning value
    function sum ($x , $y){
        $z=$x+$y;
        return $z;
    }
    echo sum(5,10);
    echo "<br>";

    //preg_match : to match pattern and string
    $int=15;
    $str="my name is krishnaba".$int;
    $pattern="/krishnaba/";
    $inte="/15/";
    echo preg_match($pattern,$str);
    echo "<br>";
    echo preg_match($inte,$str);
    echo "<br>";

    //preg_match_all
    $str="my name is krishna";
    $pattern="/i/";
    echo preg_match_all($pattern,$str);
    echo "<br>";

    //preg_replace
    $str="visit home!";
    $pattern="/home/";
    echo preg_replace($pattern,"school",$str);
    ?>
</body>
</html>