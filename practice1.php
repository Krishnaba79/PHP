<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter Your Name:</label>
        <input type="text" name="name"><br>
        <label>Enter Your City:</label>
        <input type="text" name="city"><br>

        <label>Enter Your state:</label>
        <select name="state">
            <option name="gujarat" value="gujarat">Gujarat</option>
            <option name="maharastra" value="maharastra">Maharastra</option>
            <option name="rajastan" value="rajastan">Rajastan</option>
            <option name="delhi" value="delhi">Delhi</option>
        </select><br>
        <!-- <input type="submit" name="generate" value="generate"><br> -->
        <input type="submit" name="submit" value="submit">
    </form>

    <?php 
    
        $random = rand(1000,9999);
        $nuplate = "";
        $ascii1 = mt_rand(65,90);
        $ascii2 = mt_rand(65,90);
        
        $char1 = chr($ascii1);
        $char2 = chr($ascii2);
           
        if(isset($_POST['submit']))
        {
            $state = $_POST['state'];
            if($state=="gujarat")
            {
                $nuplate = "GJ 01 ".$char1.$char2.' '.$random;   
            }
            if($state=="maharastra")
            {
                $nuplate =  "MH 01 ".$char1.$char2.' '.$random;               
            }
            if($state=="rajastan")
            {
                $nuplate = "RJ 01 ".$char1.$char2.' '.$random;               
            }
            if($state=="delhi")
            {
                $nuplate = "DL 01 ".$char1.$char2.' '.$random;       
            }
        }
        ?>
    
    <h1><?php echo $nuplate; ?></h1>

</body>
</html>

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
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $sql = "INSERT INTO information(name,city,state,nuplate)
    VALUES ('".$name."','".$city."','".$state."','".$nuplate."')";

    $insert = $conn->query($sql);

    if($insert)
    {
        echo "Data Inserted";
    }
    else{
        echo "Error!";
    }
    
}
?>