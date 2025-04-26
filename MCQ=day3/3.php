<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            height:300px;
            width : 250px;
            padding: 20px;
            margin: 10px;
            padding-left:50px;
            background-color:gray;
            font-size:20px;
        }
        input{
            margin:10px;
        }
    </style>
</head>
<body>
    <!-- 3.Write the program to get the registration page information in html and show that information using PHP -->
    <h1>Registration Information</h1>
    <form action="" method="post">
        Enter First Name : 
        <input type="text" name="fname"><br>
        Enter Last Name : 
        <input type="text" name="lname"><br>
        Enter Email : 
        <input type="email" name="email"><br>
        Enter Password : 
        <input type="number" name="pass"><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            echo "Your First Name Is : " .$fname;
            echo "<br>";
            echo "Your Last Name Is : $lname";
            echo "<br>";
            echo "Your Email Is : $email";
            echo "<br>";
            echo "Your Password Is : $pass";
        }
    ?>
</body>
</html>