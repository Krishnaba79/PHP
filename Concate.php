<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $txt1="Learn PHP";
    $txt2="W3Schools.com";
    $x=5;
    $y=4;

    //use of Concate
    echo "<h2>" .$txt1. "</h2>";
    echo "Study PHP" .$txt2. "<br>";
    echo $x + $y;

    //use of check datatype
    $p="Hello";
    $p=null;
    echo "<br>";
    var_dump($p);

    echo "<br>";
    
    //use to check string length
    echo strlen("Hiral Nagar");
    echo "<br>";

    //use to check word count
    echo str_word_count("Hiral Nagar");
    echo "<br>";

    ?>

</body>
</html>