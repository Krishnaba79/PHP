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

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $num=$_POST['num'];

    $sql="INSERT INTO info ('name','email','num') VALUES ('".$name."','".$email."',,'".$num."')";
    $insert = $conn-> query($sql);
    if ($insert){
        echo " data inserted";
    }else{
        echo "connection error";
    }
    
}

$select_query= "SELECT*FROM shah";
$select_data=mysqli_query($conn,$select_query);
?>

<table border = "1">
    <tr>
        <th> name</th>
        <th> email</th>
        <th> num</th>
        <th> delete</th>
        <th> edit</th>
    </tr>
        <?php while ($row=mysqli_fetch_array($select_data)){ ?>
        <tr>
            <td> <?php echo $row['name']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['num']; ?> </td>
        </tr>
        <?php
        } ?>
</table>

<form method = "post" >
    <action name = "refresh" type = "url" url="dashbord_url"/>
    <br>
    <label> enter your name </label>
    <input type = "text" name = "name "/>

    <br>
    <lable> enter your email </lable>
    <input type = "email" name = "email" />
    <br>
    <lable> enter your num </lable>
    <input type = "numbers" name = "num" />
    <br>
    <input type = "submit" name = "submit"/>
</form>

