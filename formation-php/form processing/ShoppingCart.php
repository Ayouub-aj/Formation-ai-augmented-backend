<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
    $itemId = $_POST['item_id'];
    if (!array_key_exists($itemId, $_SESSION['cart'])) {
        $_SESSION['cart'][$itemId] = true;
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_cart'])) {
    $_SESSION['cart'] = [];
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

$items = [
    ['id' => 1, 'name' => 'Laptop', 'price' => '$999'],
    ['id' => 2, 'name' => 'Mouse', 'price' => '$25'],
    ['id' => 3, 'name' => 'Keyboard', 'price' => '$75']
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<h1>🛒 Cart: <?php echo count($_SESSION['cart']); ?> item(s)</h1>

<?php if (!empty($_SESSION['cart'])): ?>
    <form method="POST">
        <button type="submit" name="reset_cart" value="1" style="background-color: red; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Reset Cart</button>
    </form>
<?php endif; ?>

<?php foreach ($items as $item): ?>
    <h3><?php echo $item['name']; ?> - <?php echo $item['price']; ?></h3>
    <form method="POST">
        <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
        <?php 
            if (array_key_exists($item['id'], $_SESSION['cart'])) {
                echo '<p style="color: green; font-weight: bold;">Already in cart</p>';
            } else {
                echo '<button type="submit">Add to Cart</button>';
            }
        ?>
    </form>
<?php endforeach; ?>

</body>
</html>
