<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <lable>Enter The word</lable>
        <input type="text" name="length" ><br>

        <input type="submit" name="submit" > 
    </form>
    
</body>
</html>
<?php 
if(isset($_POST['submit'])){
    $str =$_POST['length'];
    echo strlen($str);
}

?>