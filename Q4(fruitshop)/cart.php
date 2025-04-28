<!-- cart.php -->
<?php
session_start();

if (!isset($_SESSION['cart'])) {
    header("Location: index.php");
    exit();
}

$fruits = array(
    "Apple" => 2.50,
    "Banana" => 1.50,
    "Orange" => 3.00
);

$vegetables = array(
    "Carrot" => 2.00,
    "Spinach" => 1.75,
    "Tomato" => 1.25
);

$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Rate</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($_SESSION['cart'] as $item => $quantity): ?>
        <tr>
            <td><?php echo $item; ?></td>
            <td>
                <?php
                if (array_key_exists($item, $fruits)) {
                    echo $fruits[$item];
                } elseif (array_key_exists($item, $vegetables)) {
                    echo $vegetables[$item];
                }
                ?>
            </td>
            <td><?php echo $quantity; ?></td>
            <td>
                <?php
                if (array_key_exists($item, $fruits)) {
                    $subtotal = $fruits[$item] * $quantity;
                } elseif (array_key_exists($item, $vegetables)) {
                    $subtotal = $vegetables[$item] * $quantity;
                }
                echo $subtotal;
                $total += $subtotal;
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total:</td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
    <?php unset($_SESSION['cart']); ?>
</body>
</html>
