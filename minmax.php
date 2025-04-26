<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "dharm";

$conn = new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Connected";
    echo "<br>";
}
else
{
    echo "Error!";
}

$select_query = "SELECT MIN(salary), MAX(salary),AVG(salary),SUM(salary) FROM shah"; 
$select_data = mysqli_query($conn,$select_query);

// print_r(mysqli_fetch_array($select_data));

while($row=mysqli_fetch_array($select_data))
{
    echo "Mininum Salary: ".$row['MIN(salary)'];
    echo "<br>";
    echo "Maximum Salary: ".$row['MAX(salary)'];
    echo "<br>";
    echo "Average Salary: ".$row['AVG(salary)'];
    echo "<br>";
    echo "Sum: ".$row['SUM(salary)'];

}
?>