<?php
$servername="localhost";
$username="root";
$password="";
$db="abc";

$conn=new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error ";
}

if(isset($_POST['submit']))
{   
    $name=$_POST["name"];
    $image_name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
        move_uploaded_file("$tmp_name","upload_image/".$image_name);

$sql="INSERT INTO abcd(`name`,`image_name`)
VALUES ('".$name."','".$image_name."')";

$insert=$conn->query($sql);

if($insert)
{
    echo "new record created";
}
else
{
    echo "error ";
}
}

?>

<html>
<head><title>Database Connection</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <input type="file" id="image" name="image">
        <input type="submit" id="submit" value="submit" name="submit">
    </form>
</body>
</html>