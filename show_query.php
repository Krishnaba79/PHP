<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "krishnaba";

    $conn = new mysqli($servername,$username,$password,$db);
    if($conn){
        echo "connected";
    }else{
        echo "error";
    }

    $select_query = "SELECT * FROM student";
    $select_data = mysqli_query($conn,$select_query);
    
    ?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>MATHS</td>
            <td>SCIENCE</td>
            <td>ENGLISH</td>
        </tr>
        <?php while($row=mysqli_fetch_array($select_data)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['maths']; ?></td>
            <td><?php echo $row['science']; ?></td>
            <td><?php echo $row['english']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <form method="post">
        <input type="submit" name="orderby" value="orderby" >
    </form>

    <?php
        if(isset($_POST['orderby'])){
        $select_query = "SELECT * FROM student ORDER BY maths DESC ";
        // $select_query = "SELECT * FROM student ORDER BY maths";
        $select_data = mysqli_query($conn,$select_query);

        ?>
        <br>
        <h1>name</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>MATHS</td>
                <td>SCIENCE</td>
                <td>ENGLISH</td>
            </tr>
            <?php while($row=mysqli_fetch_array($select_data)){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['maths']; ?></td>
                <td><?php echo $row['science']; ?></td>
                <td><?php echo $row['english']; ?></td>
            </tr>
            <?php } } ?>
    </table>

    <form method="post">
        <input type="submit" name="groupby" value="groupby" >
    </form>

    <?php
        if(isset($_POST['groupby'])){
        // $select_query = "SELECT * FROM student GROUP BY name DESC ";
        $select_query = "SELECT * FROM student GROUP BY name";
        $select_data = mysqli_query($conn,$select_query);

        ?>
        <br>
        <h1>name</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>MATHS</td>
                <td>SCIENCE</td>
                <td>ENGLISH</td>
            </tr>
            <?php while($row=mysqli_fetch_array($select_data)){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['maths']; ?></td>
                <td><?php echo $row['science']; ?></td>
                <td><?php echo $row['english']; ?></td>
            </tr>
            <?php } } ?>


    </table>



</body>
</html>