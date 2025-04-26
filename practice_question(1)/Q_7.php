<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        *{
            background-color:yellow;
        }
        .black{
            background-color:black;
        }
        .white{
            background-color:white;
        }
        .main{
            flex-direction:column;
            display:flex;
        }
        div{
            height:100px;
            width:250px;
            display: inline-block;
            /* margin-left:15px; */
        }
    </style>
<body>
    
    <?php 
        $d = 1;
        for ($i=0; $i <= 8 ; $i++)
        {
            for ($j=$i; $j <= 8 ; $j++)
            { 
                
       ?>
                <div class="main"><?php
                if($d == 1){
                    ?><div class="black"></div><?php $d = 2;
                    
                }
                else{
                    ?><div class="white"></div><?php $d  = 1;
                }?>
                </div>

       <?php 

        }

    }
    ?>
</body>
</html>