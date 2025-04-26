<?php

$servername="localhost";
$username="root";
$password="";
$db="table_join";

$conn=new mysqli($servername,$username,$password,$db);

if($conn)
{
    echo "Database Connected";

}
else{
    echo "Database Not Connected";
}

$select="SELECT * FROM employee inner join department on employee.dept_id=department.dept_id";

// $select="SELECT * FROM employee LEFT JOIN department ON employee.dept_id=department.dept_id
//     UNION
//     SELECT * FROM employee RIGHT JOIN department ON employee_id = department.dept_id
//     WHERE employee.dept_id IS NULL";
    $select_data=mysqli_query($conn,$select);
?>

    <style>
        table,th,to{
            border:1px solid black;
        }
    </style>

    <table>
        <tr> 
            <th> emp_id </th>
            <th> emp_name </th>
            <th> dept_id </th>
        </tr>
        
        <?php while($row=mysqli_fetch_array($select_data))
    {?>
        <tr> 
            <td><?php echo $row['emp_id'];?></td>
            <td><?php echo $row['emp_name'];?></td>
            <td><?php echo $row['dept_id'];?></td>
        </tr>
        <?php
    }
    ?>
</table>