<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 7.Write a PHP program to count the words in the string -->
    <form method="post">
        ENTER YOUR STRING :
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            if($name == $name)
            {
                echo "Counted Number Of the Str: ";
                echo str_word_count($name); 
            }
            else
            {
                echo "Error!";
            }
    
        }
    ?>
</body>
</html>