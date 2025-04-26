<?php

session_start();
$name=$_POST['name'];

?>

<html>
<body>

<?php

$_SESSION['name']=$name;
// echo "Session is start";

if(isset($_POST['submit']))
{
    echo "<script>window.location.href='session2.php';</script>";
}

?>

<form method="POST">

    <label for="name">Enter the Name</label>
    <input type="text" name="name" id="name">

    <input type="submit" id="submit" value="submit" name="submit">
</form>

</body>
</html>