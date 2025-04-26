<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $day="monday";
    switch ($day){
        case "sunday";
            echo "today is sunday";
            break;
        case "monday";
            echo "today is monday";
            break;
        case "tuesday";
            echo "today is tuesday";
            break;
        case "wednesday";
            echo "today is wednesday";
            break;
        case "thursday";
            echo "today is thursday";
            break;
        case "friday";
            echo "today is friday";
            break;
        case "saturday";
            echo "today is saturday";
            break;

        default;
            echo "this is not a day";
            break;
    }
    ?>
</body>
</html>