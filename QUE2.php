<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=0; $j<=$i; $j++){  
    echo $alpha[$j];  
    }  
    echo "<br>";  
} 
?> 
    
</body>
</html>