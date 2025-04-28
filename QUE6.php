<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area of rectangle</title>
</head>
<body>
    <form method="post">
        <lable>Enter The Length</lable>
        <input type="number" name="length" ><br>

        <lable>Enter The width</lable>
        <input type="number" name="width" ><br>

        <input type="submit" name="submit" > 
    </form>

    <?php
    
        if(isset($_POST['submit'])){
            $length = $_POST['length'];
            $width = $_POST['width'];

            $area = $length*$width;

            echo $area;

        }
    
    ?>

</body>
</html>