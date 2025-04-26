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
    $db = "dharm";

    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn) {
        echo "database connected";
    } else {
        echo "error";
    }

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $area=$_POST['area'];
        $pincode=$_POST['pincode'];
        $email=$_POST['email'];

        $sql="INSERT INTO shah('name','area','pincode','email')
        VALUES ('".$name."','".$pincode."','".$email."')";
        $insert=$conn->query($sql);
        if($insert){
            echo "data inserted";
        }else{
            echo "connection error";
        }
    }

    $select_query="SELECT * FROM shah";
    $select_data=mysqli_query($conn,$sellect_query);

    ?>

<table border ="1">
        <tr>

        <th> id </th>
        <th> name </th>
        <th> area </th>
        <th> pincode </th>
        <th> email </th>
        <th> delete </th>
        </tr>
        <!-- print_r(mysqli_fetch_array($select_data));-->

        <?php
        while ($row=mysqli_fetch_array($select_data)){?>
        <tr> <td> <?php echo $row['id'];?> </td>
        <td> <?php echo $row['name'];?> </td>
        <td> <?php echo $row['area'];?> </td>
        <td> <?php echo $row['pincode'];?> </td>
        <td> <?php echo $row['email'];?> </td>
        <td> <a href ="delete.php?id=<?php echo $row['id']?>">delete<a></td>
        <!-- <td> <a href="edit.php?id=?> #php echo $row['id']?> ">edit</a></td></tr>-->
        <?php


        }
        ?>

<form method ="post">
            <br>
            <label> Enter your name </label>
            <input type = "text" name = "name" placeholder="name"/>
            <br>
            <label> Enter your area</label>
            <input type = "text" name = "area" placeholder="area"/>
            <br>
            <label> Enter your pincode </label>
            <input type = "number" name = "pincode" placeholder="pincode"/>
            <br>
            <label> Enter your email </label>
            <input type = "email" name = "email" placeholder="email"/>
            <br>

            <input type ="submit" name = "submit"/>
        </form>







</body>

</html>