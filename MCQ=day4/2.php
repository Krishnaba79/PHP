<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 2.Write a PHP program to find if the given year is leap year or not. -->

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Year: <input type="text" name="year">
    <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year'];
        if (checkLeapYear($year)) {
            echo $year . " is a leap year.";
        } else {
            echo $year . " is not a leap year.";
        }
    }

    function checkLeapYear($year) {
        if (is_int($year) && $year > 0) {
            return (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0);
        } else {
            return false;
        }
    }
    ?>

</body>
</html>