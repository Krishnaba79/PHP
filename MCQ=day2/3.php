<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 3.Write a PHP program to calculate area of rectangle -->
    <form method="post">
        ENTER YOUR Length :
        <input type="number" name="length"><br>
        ENTER YOUR width :
        <input type="number" name="width"><br>
        <input type="submit" name="submit">
    </form>
    <?php

    if(isset($_POST['submit']))
    {
        $len = $_POST['length'];
        $wid = $_POST['width'];

        $area = $len*$wid;

        echo "Area of Ractangle is : ",$area;
        
    }
    ?>
</body>
</html>