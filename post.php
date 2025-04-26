<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["address"])) {
            echo "Your name is: " . $_POST["name"] . "<br>";
            echo "Your email address is: " . $_POST["email"] . "<br>";
            echo "Your address is: " . $_POST["address"] . "<br>";
        } else {
            echo "One or more of the required fields are missing.";
        }
    ?>
</body>
</html>