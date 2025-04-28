<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Handling the profile image upload
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is a real image
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["profile_image"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        echo "No file was uploaded or there was an upload error.";
    }

    // Save username and password securely (hashing the password)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // For demonstration, just printing out the values (In real-world applications, you should save these to a database)
    echo "<br>Username: " . htmlspecialchars($username);
    echo "<br>Password (hashed): " . htmlspecialchars($hashed_password);
}
?>
