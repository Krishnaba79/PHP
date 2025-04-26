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
            for($i=1; $i<=$num; $i++)
            {
                for($j=1; $j<=$i; $j++)
                echo $j;
                echo "<br>";
            } 
        }
    ?>

</body>
</html>