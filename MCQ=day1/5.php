<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 5.Write a program to check student grade based on marks -->

    <form method="post">
        <label for="student-marks">Student Marks : </label>
        <input type="number" name="Studentmarks">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $Studentmarks = $_POST['Studentmarks'];
            if($Studentmarks >= 60)
            {
                echo "First class";
            }
            elseif($Studentmarks >= 45 && $Studentmarks <=59)
            {
                echo "Second class";
            }
            elseif($Studentmarks >= 33 && $Studentmarks <=44)
            {
                echo "Third class";
            }
            elseif($Studentmarks >= 33)
            {
                echo "Fail ";
            }
        }
    ?>
</body>
</html>