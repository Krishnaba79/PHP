<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hiral";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database Connected<br>";

?>

<!-- HTML Table to display customer data -->
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<table>
    <tr>
        <th>id</th>
        <th>customer_name</th>
        <th>area</th>
        <th>pin_code</th>
        <th>email</th>
        <th>Action</th>
    </tr>

    <?php
    $select_query = "SELECT * FROM customer";
    $select_data = mysqli_query($conn, $select_query);

    while ($row = mysqli_fetch_array($select_data)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['customer_name']; ?></td>
            <td><?php echo $row['area']; ?></td>
            <td><?php echo $row['pin_code']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="customer_delete.php?id=<?php echo $row['id']; ?>">Delete</a> |
                <a href="customer_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
