<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $servername="localhost";
    $username="root";
    $password="";
    $db="dharm";

    $conn=new mysqli("$servername","$username","$password","$db");
    if($conn){
        echo "database connected";
    }else{
        echo "error";

    }

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $image=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,"image/".$image);

        $sql="INSERT INTo imageadd('name','image')
        VALUES('".$name."','".$image."')";
        $insert=$conn->query($sql);
        if($insert){
            echo "new record created";
        }
        else{
            echo "error";
        }

    }

    ?>

    <form method="post" enctype="multipart/form-data">
        <label for="name"> name</label>
        <input type="text" id="name" name="name">
        <input type="file" id="image" name="image">
        <input type="submit" id="submit" name="submit">
    </form>
</body>
</html>