<?php

$servername="localhost";
$username="root";
$password="";
$db="dharm";

$conn=new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error!";
}

$select_query = "SELECT * FROM shah";
$select_data = mysqli_query($conn,$select_query);
// $row=mysqli_fetch_assoc($select_data );
// print_r($row);
// exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table,th,td{
            border : 1px solid black;
        }
    </style>
<body>
    

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>city</th>
        <th>country</th>
        <th>pincode</th>
        <th>salary</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>

    <?php
        while($row = mysqli_fetch_array($select_data)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['country']; ?></td>
        <td><?php echo $row['pincode']; ?></td>
        <td><?php echo $row['salary']; ?></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</td>
    </tr>
    <?php } ?>
</table>

</body>
</html>