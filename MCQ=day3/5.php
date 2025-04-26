<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 5.Create the page to get the employee personal information and store the information in mysql db -->
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "office";

        $conn = new mysqli("$servername","$username","$password","$db");

        if($conn)
        {
            echo "database Connected";
        }
        else
        {
            echo "Error!";
        }

        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $sql = "INSERT INTO employees (fname, mname, lname, email, phone) 
        VALUES(`$fname`, `$mname`, `$lname`, `$email`, `$phone`)";

        if (mysqli_query($conn, $sql)) 
        {
	        echo "New employee record created successfully";
        } 
        else 
        {
	        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);
    ?>
    <form method="post" action="">
		<label>First Name:</label>
		<input type="text" name="fname" required><br><br>
		<label>Middle Name:</label>
		<input type="text" name="mname"><br><br>
		<label>Last Name:</label>
		<input type="text" name="lname" required><br><br>
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		<label>Phone:</label>
		<input type="tel" name="phone" required><br><br>
		<input type="submit" value="Submit">
	</form>

</body>
</html>