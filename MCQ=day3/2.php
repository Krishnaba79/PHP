<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 2. Write a program to print the multiplication table of the number entered by the user. -->
    <form action="" method="post">
        Enter The Number:
        <input type="number" name="number">
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            $number = $_POST['number'];
            $counter = 1;
            while($counter<=10)
            {
                $product = $number * $counter;
                echo $number. " x " .$counter. " = " .$product . "<br>";
                $counter++;
            }   
        }
    ?>
</body>
</html>