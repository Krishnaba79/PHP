<!-- show database data -->
<?php
$servername="localhost";
$username="root";
$password="";
$db="abc";

$conn=new mysqli($servername,$username,$password,$db);

if($conn)
{
    echo "Database Connected";
}
else
{
    echo "Error ";
}

$select_query="SELECT*FROM abcd";
$select_data=mysqli_query($conn,$select_query);

//print_r(mysqli_fetch_array($select_data));
?>
<style>
table,th,td{
    border:1px solid black;
}


</style>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>image_name</th>
    </tr>


<?php while($row=mysqli_fetch_array($select_data))
{ ?>
   <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['image_name']; ?></td>
        <td><img height=100px width=100px src="upload_image/<?php echo $row['image_name'];?>"></td>
        <td><a href="image_update.php?id=<?php echo $row['id']?>">update</a></td>
    </tr>
    <?php

}
?>
</table>