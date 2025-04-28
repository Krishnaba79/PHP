<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
</head>
<body>
    <h2>Find the Sum of the Digits of a Number</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];


        function sumOfDigits($num) {
            $sum = 0;
            while ($num > 0) {
                $sum += $num % 10;
                $num = (int)($num / 10);
            }
            return $sum;
        }

        
        if (is_numeric($number) && $number >= 0) {
            $sum = sumOfDigits((int)$number);
            echo "<h3>The sum of the digits of $number is $sum.</h3>";
        } else {
            echo "<h3>Please enter a valid non-negative number.</h3>";
        }
    }
    ?>
</body>
</html>
