
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "student";

    $conn = new mysqli("$servername","$username","$password","$db");

    if($conn)
    {
        echo "Database Connected";
        echo "<br>";
    }
    else
    {
        echo "Error!";
        echo "<br>";
    }

    $sql = "SELECT job, COUNT(*) as num_employees FROM employee GROUP BY job";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "Job: ". $row["job"]. " - Number of employees: ". $row["num_employees"]. "<br>";
      }
    } else {
      echo "0 results";
    }
?>
</body>
</html>










