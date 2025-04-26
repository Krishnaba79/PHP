<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1.Write a PHP program to generate and display the first n lines of a Floyd triangle.
            Sample output 
            for n = 5
            1
            2 3
            4 5 6
            7 8 9 10
            11 12 13 14 15 -->

            <form action="" method="post">
                Enter a Number :
                <input type="number" name="number">
                <input type="submit" name="submit">
            </form>

            <?php
            if(isset($_POST['submit']))
            {
                $number = $_POST['number'];
                $num = 1;
                $count = 1;
                while ($count <= $number) 
                {
                    $counter = 1;
                    while ($counter <= $count) 
                    {
                        echo $num . " ";
                        $num++;
                        $counter++;
                    }
                    echo "<br>";
                    $count++;
                }

            }
            ?>
</body>
</html>
