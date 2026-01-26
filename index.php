<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'online_store';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT ProductID, ProductName, Description, Price, Stock, Image FROM products";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Sports Memorabilia Store</h1>

    <table>
        <caption>Available Products</caption>
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Add to Cart</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <!-- Product Image Column -->
                        <td><img src="images/<?= htmlspecialchars($row['Image']); ?>" alt="<?= htmlspecialchars($row['ProductName']); ?>" width="100" height="100"></td>
                        
                        <!-- Product Details -->
                        <td class="product-name"><?= htmlspecialchars($row['ProductName']); ?></td>
                        <td><?= htmlspecialchars($row['Description']); ?></td>
                        <td class="product-price"><?= "$" . number_format($row['Price'], 2); ?></td>
                        <td><?= $row['Stock']; ?></td>

                        <!-- Add to Cart Button -->
                        <td><a href="cart.php?add=<?= $row['ProductID']; ?>" class="add-to-cart">Add to Cart</a></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No products found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>

