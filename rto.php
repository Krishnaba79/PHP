<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        <label>Select Your City</label>
            <select name="city">
                <option name="Ahmedabad" value="Ahmedabad">Ahmedabad</option>
                <option name="Gandhinagar" value="Gandhinagar">Gandhinagar</option>
                <option name="Mahesana" value="Mahesana">Mahesana</option>
                <option name="Bhavnagar" value="Bhavnagar">Bhavnagar</option>
                <option name="Surendranagar" value="Surendranagar">Surendranagar</option>
                <option name="Surat" value="Surat">Surat</option>
            </select>

        <input type="submit" value="generate" name="generate">
    </form>

    <?php

    $asci1 = mt_rand(65, 90);
    $asci2 = mt_rand(65, 90);

    $chr1 = chr($asci1);
    $chr2 = chr($asci2);

    $random = (rand(1000,9999));
    $num_plate="";

    if(isset($_POST['generate']))
    {
        $city = $_POST['city']; 
        if($city == 'Ahmedabad')
        {                
            $num_plate = "GJ01".$chr1 . $chr2.$random;
        }
        if($city == 'Gandhinagar')
        {                
            $num_plate = "GJ18".$chr1 . $chr2.$random;
        }
        if($city == 'Mahesana')
        {                
            $num_plate = "GJ02".$chr1 . $chr2.$random;
        }
        if($city == 'Bhavnagar')
        {                
            $num_plate = "GJ04".$chr1 . $chr2.$random;
        }
        if($city == 'Surendranagar')
        {                
            $num_plate = "GJ13".$chr1 . $chr2.$random;
        }
        if($city == 'Surat')
        {                
            $num_plate = "GJ05".$chr1 . $chr2.$random;
        }
    }
    
    ?>

    <h1><?php echo $num_plate; ?></h1>

    <?php

    $servername="localhost";
    $username="root";
    $password="";
    $db="rto";

    $conn=new mysqli($servername,$username,$password,$db);

    if($conn)
    {
        echo "Database Connected";
    }
    else
    {
        echo "Erro 404 Not Found";
    }


    if(isset($_POST['generate']))
    {
        $city=$_POST['city'];
        
        $sql="INSERT INTO rto(`city`,`num_plate`)
        VALUES ('".$city."','".$num_plate."')";

        $insert=$conn->query($sql);

        if($insert)
        {
            echo "Data inserted";
        }
        else
        {
            echo "Error";
        }
    }
?>

</body>
</html>
