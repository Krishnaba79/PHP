<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 2.Remove specific element by value from an array in PHP? -->
    <?php
    $a = "jan , feb , march , jun";
    echo $a; 
    echo "<br>";
    echo "<br>";

    $delete_item = "feb";
    $months = array('jan','feb','march','jun');
    if(($key = array_search($delete_item,$months)) !== false)
    {
        unset($months[$key]);
    }
    var_dump($months);  // print array with deleted month
    echo "<br>";    // print deleted items array number 
    echo $key;
    ?>
</body>
</html>