<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $servername="localhost";
    $username="root";
    $password="";
    $db="dharm";

    $conn=new mysqli("$servername","$username","$password","$db");
    if($conn){
        echo "database connected";
    }else{
        echo "error";

    }

    $select_query="SELECT*FROM shah";
    $select_data=mysqli_query($conn,$select_query);
    //print_r(mysqli_fetch_array($select_data));
    ?>

    <table border="1">
        <tr>
            <th> id </th>
            <th> name </th>
            <th> maths </th>
            <th> eng </th>
        </tr>
         <?php while ($row=mysqli_fetch_array($select_data)){?>
        <tr> <td> <?php echo $row['id'];?> </td>
        <td> <?php echo $row['name']; ?> </td>
        <td> <?php echo $row['maths']; ?></td>
        <td> <?php echo $row ['sci']; ?> </td>
        <td> <?php echo $row ['eng']; ?> </td>  </tr>
        <?php 
        
        }
        ?>
    </table>
    
</body>
</html>