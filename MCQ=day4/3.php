<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- . Write a PHP programs to print star triangle.

    *****
    ****
    ***
    **
    *

            *
           * *
          * * *
         * * * *
        * * * * *
         * * * *
          * * *
           * *
            *
-->
<form action="" method="post"> <!-- The form action is set to the current script -->
        <label for="rows">Number of rows:</label>
        <input type="number" id="rows" name="rows" min="1" required>
        <button type="submit">Generate Triangle</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the input is set and not empty, then cast it to an integer
        $rows = isset($_POST["rows"]) ? (int)$_POST["rows"] : 0;

        // Check if rows is greater than 0
        if ($rows > 0) {
            echo "<pre>"; // Use preformatted text to maintain the layout
            for ($i = $rows; $i > 0; $i--) {
                for ($j = 0; $j < $i; $j++) {
                    echo "*";
                }
                echo "\n"; // New line
            }
            echo "</pre>";
        } else {
            echo "Please enter a positive number.";
        }
    }
    ?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h2>Diamond Shape Generator</h2>
    <form method="post">
        <label for="height">Enter the height of the diamond (odd number):</label>
        <input type="number" id="height" name="height" required>
        <input type="submit" value="Generate Diamond">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["height"])) {
        $height = $_POST["height"];
        if ($height % 2 == 0) {
            echo "<p>The number entered is even. Adjusting to the next odd number for symmetry.</p>";
            $height++; // Adjust to the next odd number for symmetry
        }

        echo "<pre>"; // Use preformatted text to maintain spacing
        printDiamond($height);
        echo "</pre>";
    }

    function printDiamond($n) {
        // Upper half
        for ($i = 1; $i <= $n; $i += 2) {
            // Print leading spaces
            echo str_repeat(" ", ($n - $i) / 2);
            // Print asterisks
            echo str_repeat("*", $i);
            echo "\n";
        }

        // Lower half
        for ($i = $n - 2; $i >= 1; $i -= 2) {
            // Print leading spaces
            echo str_repeat(" ", ($n - $i) / 2);
            // Print asterisks
            echo str_repeat("*", $i);
            echo "\n";
        }
    }
    ?>



</body>
</html>