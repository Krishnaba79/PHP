<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 6.Write a SQL statement to change salary of 
            employee to 8000 whose ID is 105, if theexisting salary is less than 5000. -->
            <?php
// Connect to the database

$servername = "localhost";
$username = "root";
$password = "";
$db = "dharm";

$conn = new mysqli("$servername", "$username", "$password", "$db");

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// SQL statement to update the employee's salary
$sql = "UPDATE employees
SET salary = 8000
WHERE employee_id = 105 AND salary < 5000;";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ". mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
</body>
</html>