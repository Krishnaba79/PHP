<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $member = array("Peter"=>"35","Ben"=>"37","Joe"=> "43");

    foreach($member as $x => $y)
    {
        echo "$x: $y <br>";
    }

    ?>

</body>
</html>