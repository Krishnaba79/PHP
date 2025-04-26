<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // global scope
    // $x = 5; // global scope

    // function myTest()
    // {
    //     //using x inside this function will generater an error
    //     echo "<p>Variable x inside function is : $x </p>";
    // }
    // myTest();
    // echo "<p>Variable x outside function is : $x </p>";



    // local scope
    // function myTest()
    // {
    //     $x = 5; //local scope
    //     echo "<p>Variable x in side function is : $x </p>";
    // }
    // myTest();
    // // using x outside the function will generate an erro
    // echo "<p>Variable x outside function is : $x </p>";



    // globle keyword
    // $x = 5;
    // $y = 10;
    // function myTest()
    // {
    //     global $x,$y;
    //     $y = $x + $y;
    // }
    // myTest();
    // echo $y; // output 15


    // global indexing
    // $x = 5;
    // $y = 10;

    // function myTest()
    // {
    //     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    // }
    // myTest();
    // echo $y;  // output 15



    // static keyword
        function myTest()
        {
            static $x = 0;
            echo $x;
            $x++;
        }

        myTest();
        myTest();
        myTest();
    ?>
</html>