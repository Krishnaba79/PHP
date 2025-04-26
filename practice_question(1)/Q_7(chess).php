<!DOCTYPE html>
<html>
<head>
    <title>8x8 Black and White Board</title>
    <style>
        .board {
            width: 400px;
            height: 400px;
            border-collapse: collapse;
        }

        .board td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<table class="board">
    <?php
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 8; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "<td class='white'></td>";
            } else {
                echo "<td class='black'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
