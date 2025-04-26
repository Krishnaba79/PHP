<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <lable>Enter The number</lable>
        <input type="number" name="number" ><br>

        <input type="submit" name="submit" > 
    </form>
    <?php 
    
        if(isset($_POST['submit'])){
            $num = $_POST['number'];
            if($num < 0){
                echo "The Number is Negative";
            }
            elseif ($num == 0) {
                echo "The number is Equals too 0";
            }
            elseif ($num > 0) {
                echo "The number is Positive";
            }
        }
    
    ?>
</body>
</html>