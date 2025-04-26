<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $website=$_POST["website"];
    $comment=$_POST["comment"];
    $gender=$_POST["gender"];
}

// $name =$email=$gender=$comment=$website="";


if(empty($name) || empty($email) || empty($website) || empty($comment) || empty($gender))
{
    echo "something is remaining";
}
else{
    echo "this is your name : ".$name."<br>";
    echo "this is your email : ".$email."<br>";
    echo "this is your website : ".$website."<br>";
    echo "this is your comment : ".$comment."<br>";
    echo "this is your gender : ".$gender."<br>";
}

// if(isset($_POST['submit'])){
//     if(empty($_POST['name'])){
//         $nameErr="name is required";

//     }else{
//         $name=$_POST["name"];
//     }
// }

// if(isset($_POST['submit'])){
//     if(empty($_POST['email'])){
//         $nameErr="email is required";

//     }else{
//         $name=$_POST["email"];
//     }
// }

// if(isset($_POST['submit'])){
//     if(empty($_POST['website'])){
//         $nameErr="website is required";

//     }else{
//         $name=$_POST["website"];
//     }
// }

// if(isset($_POST['submit'])){
//     if(empty($_POST['comment'])){
//         $nameErr="comment is required";

//     }else{
//         $name=$_POST["comment"];
//     }
// }

// if(isset($_POST['submit'])){
//     if(empty($_POST['gender'])){
//         $nameErr="gender is required";

//     }else{
//         $name=$_POST["gender"];
//     }
// }

    ?>
</body>
</html>