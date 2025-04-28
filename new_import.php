<?php 
include 'connection.php';
if(isset($_POST['submit']))
{
    $csvMimes = array('x-csv', 'text/x-csv', 'text/csv', 'application/csv');

    if(!empty($_FILES['file']['name'] && in_array($_FILES['file']['type'],$csvMimes))) 
    {
        // echo $_FILES['file']['tmp_name'];
        // exit;
        // if file uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name']))
        {
            $csv=fopen($_FILES['file']['tmp_name'],'r');

            while($row=fgetcsv($csv))
            {
                $job_id=$row['0'];
                $job_title=$row['1'];
                $min_salary=$row['2'];
                $max_salary=$row['3'];
            
                $insert ="INSERT INTO emp (`job_id`,`job_title`,`min_salary`,`max_salary`) VALUES ('".$job_id."','".$job_title."','".$min_salary."','".$max_salary."')";
                $sql=mysqli_query($conn,$insert);
            }

            if($sql)
            {
                echo "data inserted";
            }
            else
            {
                echo "error";
            }
        }
        else
        {
        echo "no file";
        }
    }
    else
    {
    echo "no file12";  
    }
}

?>