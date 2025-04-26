<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f8f9fa;
		}
		header {
			background-color: #007bff;
			color: white;
			padding: 20px;
			text-align: center;
		}
		main {
			padding: 20px;
		}
		footer {
			background-color: #f1f1f1;
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>
    <!-- 6.Create your own web page using session, database & date concepts -->
    <header>
		<h1>Employee Information</h1>
	</header>
	<main>
		<?php
		session_start();
		if (!isset($_SESSION['username'])) {
			header('Location: login.php');
		}
		?>
		<p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
		<p>Current date and time: <?php echo date('Y-m-d H:i:s'); ?></p>
		<h2>Add Employee Information</h2>
		<form method="post" action="insert_employee.php">
			<label for="first_name">First Name:</label>
			<input type="text" name="first_name" required><br><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" required><br><br>
			<label for="email">Email:</label>
			<input type="email" name="email" required><br><br>
			<label for="phone">Phone:</label>
			<input type="tel" name="phone" required><br><br>
			<input type="submit" value="Submit">
		</form>
	</main>
	<footer>
		<p>&copy; 2023 Employee Information System</p>
	</footer>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee_db";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn)
        {
            echo "";
        }
        else
        {
            echo "Error!";
        }
        
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $sql = "INSERT INTO employees (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";

        if ($conn->query($sql) === TRUE) {
            echo "New employee record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>