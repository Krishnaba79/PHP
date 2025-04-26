<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter a number between 1 and 7:<br>
  <input type="number" name="dayNum">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dayNum = $_POST["dayNum"];
  switch ($dayNum) {
    case 1:
      echo "Monday";
      break;
    case 2:
      echo "Tuesday";
      break;
    case 3:
      echo "Wednesday";
      break;
    case 4:
      echo "Thursday";
      break;
    case 5:
      echo "Friday";
      break;
    case 6:
      echo "Saturday";
      break;
    case 7:
      echo "Sunday";
      break;
    default:
      echo "Invalid number";
  }
}
?>

</body>
</html>