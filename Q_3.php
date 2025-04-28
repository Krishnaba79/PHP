<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <lable>Enter your Name</lable>
        <input type="text" name="name" ><br>

        <lable>Enter your Email Id</lable>
        <input type="email" name="email" ><br>

        <lable>Enter your Mobile Number</lable>
        <input type="number" name="phone" ><br>

        <lable>Enter your Address</lable>
        <input type="text" name="address" ><br>

        <input type="submit" name="submit" value="submit" ><br>
        <input type="submit" name="show" value="Show" >


    </form>
    <?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "practice_question_db";

    $conn = new mysqli($servername,$username,$password,$db);
    if($conn){
        echo "connected successfully";
    }else {
        echo "ERROR";
    }

    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];

        $sql="INSERT INTO practice_question_db_table(`name`,`email`,`phone`,`address`)
        VALUES('".$name."','".$email."','".$phone."','".$address."')";

        $insert=$conn->query($sql);
        if($insert){
            echo "Data inserted successfully";
        }else{
            echo "ERROR IN INSERTING DATA";
        }


    }

    if(isset($_POST['show'])){
        $select_query = "SELECT * FROM practice_question_db_table";
        $select_data = mysqli_query($conn,$select_query);

        ?>
        
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone number</td>
                <td>Address</td>
            </tr>
            <?php while ($row=mysqli_fetch_array($select_data)) {?>
                <tr>
                
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>
            <?php } ?>

        </table>
        
        <?php

    }

    ?>
</body>
</html>