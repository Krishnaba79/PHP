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

        <lable>Enter your Email ID</lable>
        <input type="email" name="email" ><br>

        <lable>Enter your age</lable>
        <input type="text" name="age" ><br>

        <lable>Enter number of family member</lable>
        <input type="number" name="familyno" ><br>

        <select name="gender">
            <option name="male">Male</option>
            <option name="female">Female</option>
            <option name="other">Other</option>
        </select><br>

        <input type="submit" name="submit">
    </form>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "practice_question_db";

    $conn = new mysqli($servername,$username,$password,$db);
    if($conn){
        echo "Database connected Successfully";
    }else {
        echo "ERROR IN CONNECTION";
    }


    if(isset($_POST['submit'])){

        $name =$_POST['name'];
        $email =$_POST['email'];
        $age =$_POST['age'];
        $familyno =$_POST['familyno'];
        $gender =$_POST['gender'];

        $sql = "INSERT INTO employee_info(`name`,`email`,`age`,`familyno`,`gender`)
        VALUES('".$name."','".$email."','".$age."','".$familyno."','".$gender."')";

        $insert = $conn->query($sql);
        if($insert){
            echo "DATA INSERTED SUCCESSFULLY";
        }else {
            echo "ERROR TO INSERT DATA";
        }

    }


    ?>
</body>
</html>