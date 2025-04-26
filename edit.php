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

    $id = $_GET['id'];
    $select_query = "SELECT * FROM dharm WHERE id = $id";
    $select_data = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_array($select_data);

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $area = $_POST['area'];
        $pincode = $_POST['pincode'];
        $email = $_POST['email'];

        $update_query = "UPDATE dharm SET name = '$name', email = '$email', area = '$area', pincode = '$pincode' WHERE id = $id";
        $update_data = mysqli_query($conn, $update_query);
        if ($update_data) {
            echo "updated";
        } else {
            echo "cancle";
        }
    }
    ?>
    <form method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>">

        <label for="area">area</label>
        <input type="text" name="area" id="area" value="<?php echo $row['area']; ?>">

        <label for="pincode">pincode</label>
        <input type="text" name="pincode" id="pincode" value="<?php echo $row['pincode']; ?>">

        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">

        <input type="submit" name="update" value="update">
    </form>
</body>
</html>