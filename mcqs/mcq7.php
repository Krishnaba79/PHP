<!DOCTYPE html>
<html>
<body>

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