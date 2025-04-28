<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <label for="input_string">Enter a string:</label>
  <input type="text" id="input_string" name="input_string"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
  if(isset($_POST['submit'])) {
    $input_string = $_POST['input_string'];
    $words = explode(' ', $input_string);
    array_pop($words);
    $output_string = implode(' ', $words);
    echo "Original String: $input_string<br>";
    echo "String after removing last word: $output_string";
  }
?>
</body>
</html>