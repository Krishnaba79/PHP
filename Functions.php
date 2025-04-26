<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    // function Hello()
    // {
    //     echo "Hiral Nagar";
    // }

    // Hello();

    //FUNCTION ARGUMENT

    function name($name)
    {
        echo "Hello $name";
    }

    name("Hiral");

    echo "<br>";

    function family_name($name,$age)
    {
        echo "Name is: $name and Age is: $age <br>";
    }

    family_name("Hiral",19);
    family_name("Heta",18);

    //DEFAULT ARGUMENT

    echo "<br>";

    // function setHeight($minheigth=50)
    // {
    //     echo "The Height is: $minheigth <br>";
    // }

    // setHeight(350);
    // setHeight();
    // setHeight(135);

    //RETURING VALUE

    function sum($x,$y)
    {
        // $z=$x+$y;
        // $z=$x-$y;
        $z=$x*$y;
        // $z=$x/$y;

        return $z;
    }

    echo "The Multiplication is : " . sum(20,10)


    ?>

</body>
</html>