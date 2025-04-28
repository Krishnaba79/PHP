<!-- vegetables.php -->
<?php
session_start();

$vegetables = array(
    "Carrot" => 2.00,
    "Spinach" => 1.75,
    "Tomato" => 1.25
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
    <title>Vegetables</title>
</head>
<body>
    <h1>Vegetables</h1>
    <form method="post">
        <table>
            <tr>
                <th>Vegetable</th>
                <th>Rate</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($vegetables as $vegetable => $rate): ?>
            <tr>
                <td><?php echo $vegetable; ?></td>
                <td><?php echo $rate; ?></td>
                <td><input type="number" name="quantity[<?php echo $vegetable; ?>]" min="0"></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <input type="submit" value="Add to Cart">
    </form>
</body>
</html>
