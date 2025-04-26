<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    function myFunction()
    {
        echo "This text comes from a function";
    }

    $Array=array("Hiral",19,["Volvo","BMW"],myFunction());

    $Array[3]();

    ?>

</body>
</html>