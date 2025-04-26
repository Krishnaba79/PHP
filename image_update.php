<?php
$servername="localhost";
$username="root";
$password="";
$db="abc";
// $search=$_POST['search'];

$conn=new mysqli("$servername","$username","$password","$db");

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error ";
}

$id=$_GET['id'];
$select_query="SELECT * FROM abcd where id='".$id."'";
$select_data=mysqli_query($conn,$select_query);
$row=mysqli_fetch_array($select_data);

if(isset($_POST['update']))
{
    $name=$_POST["name"];
    if($_FILES['image']['name'])
    {   
        $image_name=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
            move_uploaded_file("$tmp_name","upload_image/".$image_name);
    }
    else
    {
        $image_name=$row['image_name'];
    }
    
    $update_query="UPDATE abcd SET `name`='".$name."',`image_name`='".$image_name."' WHERE id='".$id."'";
    $update_data=mysqli_query($conn,$update_query);

    if($update_data)
    {
        echo "updated";
    }
    else
    {
        echo "cancel";
    }
}
?>

<html>
<head><title>Database Connection</title>
</head>

<body>
    <form method="post" enctype="multiple/form-data">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']?>">

        <input type="file" id="image" name="image">
        <img src="upload_image/<?php echo $row['image_name']?>" height=100px width=100px>

        <input type="submit" id="update" value="update" name="update">

    </form>
</body>
</html>