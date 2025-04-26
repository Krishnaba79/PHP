<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function generateNumber($city){
        $randomeCharacterList="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randomeNumberList="1234567890";

        $stateCode="GJ";

        $randomeCharacter=" ";
        for ($i=0; $i <2;$i++){
            $randomeCharacter .= $randomeCharacterList[rand(0, strlen
            ($randomeCharacterList)-1)];

        }

        $randomeNumber =" ";
        for ($i=0;$i < 4;$i++){
            $randomeNumber .= $randomeNumberList[randd ( 0, strlen($randomeNumberList)-1)];
        }

        $cityCode= " ";
        if($city == "ahemedabad"){
            $cityCode="01";
        }
        elseif($city == "gandhinagar"){
            $cityCode="18";
        }
        else{
            $cityCode == "00";
        }

        
        if ($cityCode == "00"){
            echo "please enter VALID city";
        }
        else{
            return $stateCode ." " .$cityCode." " .$randomeCharacter."". $randomeNumber;
        }
    }
    ?>
</body>
</html>