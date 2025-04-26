<?php
$servername="localhost";
$username="root";
$password="";
$db="dharm";

$conn=new mysqli($servername,$username,$password,$db);
if($conn){
    echo "database connected";

}else{
    echo "error";
}

if (isset($_POST['submit'])){
    //$id = $post['id'];
    $name=$_POST['name'];
    $name=$_POST['maths'];
    $name=$_POST['sci'];
    $name=$_POST['eng'];



    $sql="INSERT INTO shah('name','maths','sci','eng')
    VALUES ('".$name."','".$maths."','".$sci."','".$eng."')";
    $insert=$conn->query($sql);
        if($insert){
            echo "database inserted";
        }else{
            echo "connection error";
        }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <!--<label> enter your id</label>
        <input type = "text" name = "id" placeholder = "id"/>
        <br>-->
        <label> Enter your name</label>
        <input type = "text" name = "name"placeholder="name"/>
        <br>
        <label>  Enter your maths </label>
        <input type = "number" name="maths" placeholder="maths"/>
        <br>
        <label>  Enter your sci </label>
        <input type = "number" name="sci" placeholder="sci"/>
        <br>
        <label>  Enter your eng </label>
        <input type = "number" name="eng"placeholder="eng"/>
        <br>

        <input type = "submit" name="submit"/>
    </form>

</body>
</html>