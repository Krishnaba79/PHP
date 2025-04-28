<?php 
include 'connection.php';

    $filename='emp.csv';
    $delimeter=",";

    $f =fopen('php://memory','w');

    $headers= array('id','job_id','job_title','min_salary','max_salary');
    fputcsv($f,$headers,$delimeter);

    $sql="SELECT * FROM emp";
    $query=mysqli_query($conn,$sql);
    if($query){
        while($row=mysqli_fetch_assoc($query)){
        $data=array($row['id'],$row['job_id'],$row['job_title'],$row['min_salary'],$row['max_salary']);
        fputcsv($f,$data,$delimeter);
        }

    }
    fseek($f,0);
    header('Content-Type:text/csv');
    header('Content-Disposition:attachment;filename="'.$filename.'"');
    fpassthru($f);

    exit();

?>