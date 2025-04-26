<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <lable>Enter The string</lable>
        <input type="text" name="reverse" ><br>

        <input type="submit" name="submit" > 
    </form>

    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $str =$_POST['reverse'];
    echo strrev($str);
}

?>