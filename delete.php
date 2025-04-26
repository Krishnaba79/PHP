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

    $id=$_GET['id'];
    $delete_query="DELETE FROM shah where id ='".$id."'";
    $delete_data=mysqli_query($conn,$delete_query);
    if($delete_data){
        echo "deleted";
    }else{
        echo "error";
    }
    ?>
</body>
</html>