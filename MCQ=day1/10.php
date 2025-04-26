<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 10. Write a simple calculator program in PHP using switch case -->
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Number 1: <input type="number" name="num1"><br>
    Number 2: <input type="number" name="num2"><br>
    Operator: 
    <select name="operator">
      <option value="addition">Addition</option>
      <option value="subtraction">Subtraction</option>
      <option value="multiply">Multiplication</option>
      <option value="divide">Division</option>
    </select>
    <input type="submit">
  </form>
  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operator = $_POST['operator'];
  
      switch($operator) {
          case "add":
              $Result = $num1 + $num2;
              break;
          case "subtract":
              $Result = $num1 - $num2;
              break;
          case "multiply":
              $Result = $num1 * $num2;
              break;
          case "divide":
              if($num2 != 0) {
                  $Result = $num1 / $num2;
              } else {
                  echo "Cannot divide by zero!";
                  return;
              }
              break;
      }
  
      echo "The Result is: " . $Result;
  }
  ?>
    
</body>
</html>