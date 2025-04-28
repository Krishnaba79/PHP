<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter the number</label>
        <input type="number" name="number"> <br>
        <input type="submit" name="submit"  >
    </form>

    <?php 
    
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            echo strrev($number);
            

        }

    ?>
</body>
</html>