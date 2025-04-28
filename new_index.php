<?php 

include 'connection.php';

?>

<html>
    <body>
        <div>
        <a href="new_export.php">Export</a>
        </div>
        <br>

        <form action="new_import.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <input type="submit" name="submit" value="Import">
        </form>
    </body>
</html>