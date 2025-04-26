<?php
$servername="localhost";
$username="root";
$password="";
$db="hiral";
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
$select_query="SELECT * FROM customer where id='".$id."'";
$select_data=mysqli_query($conn,$select_query);
$row=mysqli_fetch_array($select_data);

if(isset($_POST['update']))
{
    $customer_name=$_POST['customer_name'];
    $area=$_POST['area'];
    $pin_code=$_POST['pin_code'];
    $email=$_POST['email'];
    
    $update_query="UPDATE customer SET `customer_name`='".$customer_name."',`area`='".$area."',`pin_code`='".$pin_code."',`email`='".$email."' WHERE id='".$id."'";
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
        <label for="customer_name">Customer Name</label>
        <input type="text" id="customer_name" name="customer_name" value="<?php echo $row['customer_name']?>">

        <label for="area">Area</label>
        <input type="text" id="area" name="area" value="<?php echo $row['area']?>">

        <label for="pin_code">Pincode</label>
        <input type="number" id="pin_code" name="pin_code" value="<?php echo $row['pin_code']?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']?>">

        <input type="submit" id="update" value="update" name="update">

    </form>
</body>
</html>