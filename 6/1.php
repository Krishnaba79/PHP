<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        Enter The Number :
        <input type="number" name="num">
        <input type="submit" name="submit">
    </form>

    <?php
    
        if(isset($_POST['submit']))
        {
            $num = $_POST['num'];
            for($i = 0; $i < $num; $i++) 
            {
                for($j = 0; $j < $i; $j++) 
                {
                    echo "&nbsp;&nbsp;";
                }
                for($k = 0; $k < 2 * ($num - $i) - 1; $k++) 
                {
                    echo "*";
                }
                echo "<br>";
            }

            for($i = 0; $i < $num; $i++) 
            {
                for($j = 0; $j < $num - $i - 1; $j++) 
                {
                    echo "&nbsp;&nbsp;";
                }
                for($k = 0; $k < 2 * $i + 1; $k++) 
                {
                    echo "*";
                }
                echo "<br>";
            }
        }
    ?>

</body>
</html>