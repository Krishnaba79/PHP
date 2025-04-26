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

            for($i = 0; $i < $num; $i++) {
                // print spaces
                for($j = 1; $j < $num - $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                // print stars
                for($k = 0; $k <= $i; $k++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>