<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 4.Write a PHP program to check whether a number is positive, negative or zero -->
    <form method="post">
        <label for="number">Number Of Whether : </label>
        <input type="number" name="number">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $number = $_POST['number'];
            if($number > 0)
            {
                echo "Whether Is Positive ";
            }
            elseif($number < 0)
            {
                echo "Whether Is Negative";
            }
            elseif($number == 0)
            {
                echo "Zero";
            }
        }
    ?>
</body>
</html>