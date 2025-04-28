<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$db="examexternal"; 
 
$conn=new mysqli("$servername","$username","$password","$db"); 
 
if($conn) 
{ 
    echo "Database Connected"; 
} 
else 
{ 
    echo "Error "; 
} 
 
$select_query="SELECT*FROM first left join second on first.EMPLOYEE_NAME=second.EMPLOYEE_NAME"; 
$select_data=mysqli_query($conn,$select_query); 
?> 
 

 <table>
    <tr>
        <td>EID</td>
        <td>EMPLOYEE_NAME</td>
        <td>SALES_MADE</td>
        

    </tr>

    <?php while ($row=mysqli_fetch_array($select_data))
    {?>
    <tr>
        <td><?php echo $row['EID'];?></td>
        <td><?php echo $row['EMPLOYEE_NAME'];?></td>
        <td><?php echo $row['SALES_MADE'];?></td>
        

    </tr>
    <?php
    }
    ?>
</table>

