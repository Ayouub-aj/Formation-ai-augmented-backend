<?php
$products = ["Laptop", "Phone", "Tablet", "Apple", "Banana", "iphone 5", "iphone 17"];

$cat = $_GET['category'] ?? '';

if ($cat == 'tech') {
    $products = ["Laptop", "Phone", "Tablet", "iphone 5", "iphone 17"];
} elseif ($cat == 'food') {
    $products = ["Apple", "Banana"];
}

$sort = $_GET['sort'] ?? '';

if ($sort == 'asc') {
    sort($products, SORT_STRING | SORT_NATURAL); 
} elseif ($sort == 'desc') {
    rsort($products, SORT_STRING | SORT_NATURAL); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Catalog</title>
</head>
<body>

    <h2>Product Filter</h2>

    <p>
        <strong>Category:</strong>
        <a href="?category=tech&sort=<?php echo $sort; ?>">Tech</a> | 
        <a href="?category=food&sort=<?php echo $sort; ?>">Food</a> | 
        <a href="?">Reset</a>
    </p>

    <p>
        <strong>Sort:</strong>
        <a href="?category=<?php echo $cat; ?>&sort=asc">Alphabetical (A-Z)</a> | 
        <a href="?category=<?php echo $cat; ?>&sort=desc">Reverse (Z-A)</a>
    </p>

    <hr>

    <h3>Results:</h3>
    <ul>
        <?php 
        // Loop through whatever is left in the array and print it
        foreach ($products as $item) {
            echo "<li>$item</li>";
        } 
        ?>
    </ul>

</body>
</html>

