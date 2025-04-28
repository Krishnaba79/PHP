<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <lable>Enter the year</lable>
        <input  type="date" name="date"><br>
        <input type="submit" name="submit" >
    </form>
        <?php
        
        if(isset($_POST['submit'])){
                $year = $_POST['date'];
                function isLeapYear($year) {
                    return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
                }
                
                if (isLeapYear($year))
                {
                    echo "$year is a leap year.";
                } 
                else 
                {
                    echo "$year is not a leap year.";
                }
            }
        ?>
</body>
</html>