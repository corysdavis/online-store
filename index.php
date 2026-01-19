<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'online_store';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT ProductName, Description, Price, Stock FROM products";
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

    <h1>Sports Memorobilia Store</h1>

    <table>
        <caption>Available Products</caption>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td class="product-name"><?= htmlspecialchars($row['ProductName']); ?></td>
                        <td><?= htmlspecialchars($row['Description']); ?></td>
                        <td class="product-price"><?= "$" . number_format($row['Price'], 2); ?></td>
                        <td><?= $row['Stock']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No products found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
