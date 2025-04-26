<?php

$servername="localhost";
$username="root";
$password="";
$db="employee";

$conn=new mysqli($servername,$username,$password,$db);

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error 404 Not Found";
}

echo "<br>";
$select_query="SELECT MIN(salary),MAX(salary),AVG(salary),SUM(salary) FROM employee";
$select_data=mysqli_query($conn,$select_query);

// print_r(mysqli_fetch_array($select_data));

while($row=mysqli_fetch_array($select_data))
{
    echo "Minimum Salary: ".$row['MIN(salary)'];
    echo "<br>";
    echo "Maximum Salary: ".$row['MAX(salary)'];
    echo "<br>";
    echo "AVERAGE: ".$row['AVG(salary)'];
    echo "<br>";
    echo "SUM: ".$row['SUM(salary)'];
}
?>