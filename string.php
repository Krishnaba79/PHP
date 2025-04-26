<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- simple string -->
    <?php
        // echo "Hello!";
        // echo "<br>";

        // $x = "John";
        // echo "Hello $x";
        // echo "<br>";

        // $x = "John";
        // echo 'hello $x';
        // echo "<br>";

        // echo strlen("Hello World!");
        // echo "<br>";

        // echo str_word_count("Hello world!");
        // echo "<br>";

        // echo strpos("Hello world!", "world");
        // echo "<br>";
    ?>

    <!-- modify string -->
    <?php
    // $x = "hello World!";
    // echo strtoupper($x);
    // echo "<br>";

    // $x = "HELLO WORLD!";
    // echo strtolower($x);
    // echo "<br>";

    // $x = "Hello World!";
    // echo str_replace("World", "Dolly", $x);
    // echo "<br>";

    // $x = "Hello World!";
    // echo strrev($x);
    // echo "<br>";

    // $x = " Hello World! ";  // its remove whitespace from beginning or end
    // echo trim($x);
    // echo "<br>";
    
    // // convert string into array
    // $x = "Hello World!";
    // $y = explode(" ",$x);

    // // Use the print_r() function to display theresult:
    // print_r($y);
    // echo "<br>";
    ?>

    <!-- Concatenate string -->
    <?php
    // $x = "Hello";
    // $y = "World";
    // $z = $x . $y;
    // echo $z;
    // echo "<br>";

    // $x = "Hello";
    // $y = "World";
    // $z = $x." ".$y;
    // echo $z;
    // echo "<br>";

    // $x = "Hello";
    // $y = "World";
    // $z = "$x $y";
    // echo $z;
    // echo "<br>";

    ?>

    <!-- Slicing String -->

    <?php
    // $x = "Hello World!";
    // echo substr($x,6,5);
    // echo "<br>";

    // $x = "Hello World!";
    // echo substr($x, 6);
    // echo "<br>";

    // $x = "Hello World!";
    // echo substr($x, -5 , 3);
    // echo "<br>";

    // $x = "Hi, How Are You?";
    // echo substr($x,5,-3);
    // echo "<br>";

    ?>

    <!-- Escape Characters -->

    <?php
    
    // $x = "We are the so-called "Vikings" From the north.";  // Its genret error
    // echo $x;
    // echo "<br>";

    // Dobule Quotes
    $x = "We are the so-called \"Vikings\" From the north.";
    echo $x;
    echo "<br>";

    // PHP Variable
    $x = "Escape php variable name \$myvar";
    echo $x;
    echo "<br>";

    // new line
    $x = "Hello\nWorld";
    echo $x;
    echo "<br>";

    // carriage return 
    $x = "Hello\rWorld";
    echo $x;
    echo "<br>";

    ?>
</body>
</html>