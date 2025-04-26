<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 8.How to check if an array is a subset of another in PHP? -->
  
    <?php
    $x = array('2','3','4','5','6');
    $y = array('4','5');

    if(array_intersect($x,$y)=== $y)
    {
        echo "It Is Subset";
    }
    else
    {
        echo "It is not subset";
    }
    ?>
</body>
</html>