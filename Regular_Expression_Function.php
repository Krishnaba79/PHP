<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $str="Hello Hiral";
    $pattern="/Hiral/";
    echo preg_match($pattern,$str);

    //Preg_Match_ALl

    echo "<br>";

    $str1="The rain is in SPAIN falls mainly on the plains";
    $pattern1="/ain/i";
    echo preg_match_all($pattern1,$str1);

    //PREG_REPLACE

    echo "<br>";

    $str2="Hello Hiral";
    $pattern2="/Hello/i";
    echo preg_replace($pattern2,"Namaste",$str2);

    ?>

</body>
</html>