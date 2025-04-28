<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter Your Id:</label>
        <input type="number" name="id"><br>
        <label>Enter Your Name:</label>
        <input type="text" name="name"><br>
        <label>Enter Your Salary:</label>
        <input type="number" name="salary"><br>
        <label>Enter Your Status:</label>
        <input type="text" name="status"><br>
        <label>Enter Your Job:</label>
        <input type="text" name="job"><br>

        <input type="submit" name="submit">

    </form>
</body>
</html>
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

    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $status = $_POST['status'];
        $job = $_POST['job'];

        $sql = "INSERT INTO employee (`id`,`name`,`salary`,`status`,`job`)
        VALUES ('".$id."','".$name."','".$salary."','".$status."','".$job."')";

        $insert = $conn->query($sql);

        if($insert)
        {
            echo "Data Inserted";
        }
        else{
            echo "Error!";
        }
        
    }

    
$select_query = "SELECT MIN(salary), MAX(salary) FROM employee"; 
$select_data = mysqli_query($conn,$select_query);

// print_r(mysqli_fetch_array($select_data));

while($row=mysqli_fetch_array($select_data))
{
    echo "Mininum Salary: ".$row['MIN(salary)'];
    echo "<br>";
    echo "Maximum Salary: ".$row['MAX(salary)'];
    echo "<br>";
}
?>
