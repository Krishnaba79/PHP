<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1. Design a PHP form for online driving license issue. Consider the fields- Name, Age
            andAddress (text boxes). If the age is less than 18, issue an error message. 
            Otherwise comput the expiry date [Today’s date+ 15years] of the license. 
            Assume that the validity of the driving license is for 15 years. 
            Display the license with details using PHP -->
            

    <h1>Online Driving License Issue</h1>


    <?php
        $name = "";
        $address = "";
        $age = "";
        $error_message = "";

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $address = $_POST["address"];
            $age = $_POST["age"];

            // Validate age
            if ((int)$age < 18) {
                $error_message = "You must be at least 18 years old to get a driving license.";
            } else {
                // Calculate expiry date
                $expiry_date = new DateTime();
                $expiry_date->add(new DateInterval('P15Y'));

                // Display the license
                echo "<h2>Driving License Issued to:</h2>";
                echo "<p><strong>Name:</strong> {$name}</p>";
                echo "<p><strong>Address:</strong> {$address}</p>";
                echo "<p><strong>Expiry Date:</strong> {$expiry_date->format('d-m-Y')}</p>";
            }
        }
    ?>
    
    <!-- Form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($name);?>">
        <br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required><?php echo htmlspecialchars($address);?></textarea>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="120" required value="<?php echo htmlspecialchars($age);?>">
        <br><br>
        <?php echo isset($error_message) ? "<p style='color:red'>{$error_message}</p>" : ""; ?>
        <input type="submit" value="Apply for Driving License">
    </form>

</body>
</html>