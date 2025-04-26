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
    echo "404 Not Found";
}

if(isset($_POST['submit']))
{
    $emp_name=$_POST["emp_name"];
    $salary=$_POST["salary"];
    $department=$_POST["department"];

$sql="INSERT INTO employee(`emp_name`,`salary`,`department`)
VALUES ('".$emp_name."','".$salary."','".$department."')";

$insert=$conn->query($sql);

if($insert)
{
    echo "data inserted";
}
else
{
    echo "connection failed";
}
}

?>

<html>
<head><title>Database Connection</title>
</head>
<body>

    <form method="post">
        <label for="emp_name">emp_name</label>
        <input type="text" id="emp_name" name="emp_name">

        <label for="salary">salary</label>
        <input type="text" id="salary" name="salary">


        <label for="department">department</label>
        <input type="text" id="department" name="department">

        <input type="submit" id="submit" value="submit" name="submit">
    </form>
</body>
</html>