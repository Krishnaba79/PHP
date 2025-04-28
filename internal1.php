<?php
// Database credentials
$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "userDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $profile_image = $_FILES['profile_image'];

    // Check credentials
    if ($user == "admin" && $pass == "godgift") {
        // Handle profile image upload
        if ($profile_image['error'] == UPLOAD_ERR_OK) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($profile_image["C:\xampp\htdocs\krishna.png"]);
            
            // Ensure the uploads directory exists
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            if (move_uploaded_file($profile_image["C:\xampp\htdocs\krishna.png"], $target_file)) {
                // Update the profile image in the database
                $sql = "UPDATE users SET profile_image='$target_file' WHERE username='admin'";
                
                if ($conn->query($sql) === TRUE) {
                    echo "Profile image updated successfully. Welcome admin!";
                } else {
                    echo "Error updating profile image: " . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Welcome admin!";
        }
    } else {
        echo "Invalid username or password. Redirecting to login page...";
        header("refresh:2; url=login.php");
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>
<form method="post" enctype="multipart/form-data">
  Username:<br>
  <input type="text" name="username" required><br>
  Password:<br>
  <input type="password" name="password" required><br>
  Profile Image:<br>
  <input type="file" name="profile_image" accept="image/*"><br><br>
  <input type="submit" value="Login">
</form> 

</body>
</html>
