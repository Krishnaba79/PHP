<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
                <lable>Enter your First Name</lable>
                <input type="text" name="firstname" ><br>

                <lable>Enter your Last Name</lable>
                <input type="text" name="lastname" ><br>

                <lable>Enter your Age</lable>
                <input type="number" name="age" ><br>

                <lable>Enter your Country</lable>
                <input type="text" name="country" ><br>

                <input type="submit" name="submit" value="insert"><br> 
                <input type="submit" name="show" value="show" > <br>
                <input type="submit" name="average" value="average"><br> 

            </form>

    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "MIN_MAX";

        $conn = new mysqli($servername,$username,$password,$db);
        if($conn){
            echo "connected";
        }else{
            echo "error";
        }

        $firstname = $_GET['firstname'];
        $delete_query = "SELECT * FROM min_max WHERE firstname ='".$firstname."' ";
        $delete_data = mysqli_query($conn,$delete_query);
        $row = mysqli_fetch_array($delete_data);

        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname= $_POST['lastname'];
            $age = $_POST['age'];
            $country = $_POST['country'];
            
            $sql = "INSERT INTO min_max(`firstname`,`lastname`,`age`,`country`)
            VALUES ('".$firstname."','".$lastname."','".$age."','".$country."')";

            $insert = $conn->query($sql);
            if($insert){
                echo "data inserted";
            }else{
                echo "error in data insert";
            }
        }
            ?>
            
    <?php
    if(isset($_POST['show']))
    {
        $select_query = "SELECT * FROM min_max";
        $select_data = mysqli_query($conn,$select_query);
        ?>
        <table border="1">
            <tr>
                <td>Fisrt Name</td>
                <td>Last Name</td>
                <td>Age</td>
                <td>Country</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
            <?php while($row=mysqli_fetch_array($select_data)){ ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><a href="practice31(min_max).php?firstname=<?php echo $row['firstname']; ?>">Delete</a></td>
                <td><a href="practice31(min_max).php?firstname=<?php echo $row['firstname']; ?>">Edit</a></td>
            </tr>
            <?php } ?>

    </table>
        <?php } 
        if(isset($_POST['average'])){
            $min_query = "SELECT min(age),max(age),avg(age) FROM min_max";
            $min_data = mysqli_query($conn,$min_query);
            ?>
            <table border="1">
            <tr>
                <td>Min Age</td>
                <td>Max Age</td>
                <td>Average Age</td>
            </tr>
            <?php while($row=mysqli_fetch_array($min_data)){ ?>
            <tr>
                <td><?php echo $row["min(age)"]; ?></td>
                <td><?php echo $row["max(age)"]; ?></td>
                <td><?php echo $row["avg(age)"]; ?></td>
            </tr>

            <?php } }?>


</body>
</html>