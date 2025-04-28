<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Import CSV and Display</title>
</head>
<body>
    <h2>Import CSV File and Display Content</h2>
    <form method="post" enctype="multipart/form-data">
        <label for="file">Choose CSV file:</label>
        <input type="file" id="file" name="file" accept=".csv" required>
        <br><br>
        <input type="submit" name="import" value="Import and Display">
    </form>

    <?php
    if (isset($_POST['import'])) {
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $fileName = $_FILES["file"]["name"];
            $fileType = $_FILES["file"]["type"];
            $fileTmpName = $_FILES["file"]["tmp_name"];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if ($fileExtension == "csv") {
                if (($handle = fopen($fileTmpName, "r")) !== FALSE) {
                    echo "<h3>CSV File Content:</h3>";
                    echo "<table border='1'>";

                    $isHeader = true;
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        foreach ($data as $cell) {
                            if ($isHeader) {
                                echo "<th>" . htmlspecialchars($cell) . "</th>";
                            } else {
                                echo "<td>" . htmlspecialchars($cell) . "</td>";
                            }
                        }
                        echo "</tr>";
                        $isHeader = false;
                    }
                    echo "</table>";

                    fclose($handle);
                } else {
                    echo "Error opening the CSV file.";
                }
            } else {
                echo "Please upload a valid CSV file.";
            }
        } else {
            echo "Error: " . $_FILES["file"]["error"];
        }
    }
    ?>
</body>
</html>
