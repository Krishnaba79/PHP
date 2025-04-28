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

        <lable>Enter your Age</lable>
        <input type="number" name="age" ><br>

        <lable>Enter your Address</lable>
        <input type="text" name="address" ><br>

        <input type="submit" name="submit" ><br>
    </form>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db  = "licence_making";

    $conn = new mysqli("$servername","$username","$password","$db");
    if($conn){
        echo "connected";
    }else {
        echo "ERROR";
    }
    
    $age = $_POST['age'];
    if ($age > 18) {
        
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $date = date("d-m-y");
        $end = date('d-m-y', strtotime('+15 years'));

        $sql = "INSERT INTO licence_making_TABLE(`name`,`age`,`address`)
        VALUES ('".$name."','".$age."','".$address."')";

        $insert = $conn->query($sql);
        if($insert){
            echo "data inserted";
        }else {
            echo "ERROR";
        }
        ?>
        <h3>Your name is <?php echo $name; ?></h3><br>
        <h3>You Are eligible for the licence</h3><br>
        <h3>Date of the application <?php echo $date; ?> </h3><br>
        <h3>Date of the expiery <?php echo $end;?> </h3><br>
        <?php

    }
}else {
    echo "Pehele bada ho ja ";
}

    ?>

    <div></div>

</body>
</html>