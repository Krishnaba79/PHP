<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <lable>Enter The Unit Number</lable>
        <input type="number" name="number" ><br>
        <input type="submit" name="submit" > 
    </form>
    <?php 
    
    if(isset($_POST['submit'])){

        $num = $_POST['number'];
        if($num >0 &&  $num <= 50 ){
            $sum = $num * 3.50;
            echo "Your units bill is ".$sum."₹";
        }
        elseif ($num >= 51 && $num <= 150) {
            $sum = $num * 4.00;
            echo "Your units bill is ".$sum."₹";

        }
        elseif ($num >= 151 && $num <= 250) {
            $sum = $num * 5.20;
            echo "Your units bill is ".$sum."₹";
        }
        elseif ($num >= 251) {
            $sum = $num * 6.50;
            echo "Your units bill is ".$sum."₹";

        }
        else {
            echo "Enter the valid units";
        }

    }

    ?>
</body>
</html>