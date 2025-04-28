<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Your cart is empty.";
} else {
    echo "<h1>Shopping Cart</h1>";
    echo "<ul>";
    foreach ($_SESSION['cart'] as $index => $item) {
        echo "<li>{$item['name']} - {$item['quantity']} x ${$item['price']}</li>";
    }
    echo "</ul>";

    echo '<form method="post"><input type="submit" name="clear_cart" value="Clear Cart"></form>';

    if (isset($_POST['clear_cart'])) {
        unset($_SESSION['cart']);
        header("Location: cart.php");
        exit();
    }
}
?>