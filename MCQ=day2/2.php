<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 2.Write a program to calculate Electricity bill in PHP
            Conditions:

            For first 50 units – Rs. 3.50/unit
            For next 100 units – Rs. 4.00/unit
            For next 100 units – Rs. 5.20/unit
            For units above 250 – Rs. 6.50/unit
            You can use conditional statements. -->
            <form action="" method="post">
                Enter The Unit:
                <input type="number" name="num" id="name">
                <input type="submit" name="submit">
            </form>
            <?php
            if(isset($_POST['submit']))
            {
                $num=$_POST['num'];
                $bill=0;

                if($num>0 && $num<=50)
                {
                    $bill==$bill*3.50;
                }
                elseif($num>50 && $num==150)
                {
                    $bill=50*3.50 + ($num-50)*4.00;
                }
                elseif($num>150 && $num<=250)
                {
                    $bill=50*3.50 + ($num-50)*4.00+($num-150)*5.20;
                }
                elseif($num>250)
                {
                    echo "Total Bill Is: ";
                    echo $totalbill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($num -250) * 6.50;
                }
                else
                {
                    echo "Invalid Unit";
                }
            }
            ?>
</body>
</html>