<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1.Write a factorial program using for loop in php -->
    <form method="post">
        ENTER YOUR Number :
        <input type="number" name="number">
        <input type="submit" name="submit">
    </form>
    <?php
        function factorial($number)
        {
            $result = 1;
            for($i=$number;$i >= 1;$i--)
            {
                $result *= $i;
            }
            return $result;
        }

        if(isset($_POST['submit']))
        {
            $number = $_POST['number'];
            if($number == $number)
            {
                echo "$number Factorial Is : ";
                echo factorial($number); 
            }
            else
            {
                echo "Error!";
            }
    
        }
    ?>
</body>
</html>