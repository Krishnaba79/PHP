<?php
session_start();

// Sample product data
$products = array(
    array("name" => "Item 1", "price" => 10),
    array("name" => "Item 2", "price" => 15),
    array("name" => "Item 3", "price" => 20)
);

if (isset($_POST['add_to_cart'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['cart'][$index])) {
        $_SESSION['cart'][$index]['quantity']++;
    } else {
        $_SESSION['cart'][$index] = array(
            'name' => $products[$index]['name'],
            'price' => $products[$index]['price'],
            'quantity' => 1
        );
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <h1>Product Listing</h1>
    <ul>
        <?php foreach ($products as $index => $product): ?>
            <li>
                <?php echo $product['name']; ?> - $<?php echo $product['price']; ?>
                <form method="post">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <input type="submit" name="add_to_cart" value="Add to Cart">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a>
</body>
</html>
