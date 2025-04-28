<!-- fruits.php -->
<?php
session_start();

$fruits = array(
    "Apple" => 2.50,
    "Banana" => 1.50,
    "Orange" => 3.00
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['quantity'] as $key => $value) {
        $_SESSION['cart'][$key] = $value;
    }
    header("Location: cart.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fruits</title>
</head>
<body>
    <h1>Fruits</h1>
    <form method="post">
        <table>
            <tr>
                <th>Fruit</th>
                <th>Rate</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($fruits as $fruit => $rate): ?>
            <tr>
                <td><?php echo $fruit; ?></td>
                <td><?php echo $rate; ?></td>
                <td><input type="number" name="quantity[<?php echo $fruit; ?>]" min="0"></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <input type="submit" value="Add to Cart">
    </form>
</body>
</html>
