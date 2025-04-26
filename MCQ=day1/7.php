<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 7. Write a program to create Chess board in PHP using for loop -->

    <table border="1" style="width: 400px; height: 400px;">
      <?php
      $size = 8;
      $color = 1;
      for ($i = 0; $i < $size; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $size; $j++) {
          if (($i + $j) % 2 == 0) {
            $color = 1;
          } else {
            $color = 0;
          }
          if ($color == 1) {
            echo "<td style='background-color: white;'></td>";
          } else {
            echo "<td style='background-color: black;'></td>";
          }
        }
        echo "</tr>";
      }
      ?>
    </table>

</body>
</html>