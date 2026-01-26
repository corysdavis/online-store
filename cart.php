<?php
session_start();

if (isset($_GET['add'])) {
    $productID = $_GET['add'];
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$productID])) {
        // Increase the quantity if the product is already in the cart
        $_SESSION['cart'][$productID]++;
    } else {
        // Add the product to the cart with a quantity of 1
        $_SESSION['cart'][$productID] = 1;
    }
}

// Display the cart contents
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<h2>Your Cart</h2>";
    echo "<ul>";
    foreach ($_SESSION['cart'] as $productID => $quantity) {
        echo "<li>Product ID: $productID, Quantity: $quantity</li>";
    }
    echo "</ul>";
} else {
    echo "<h2>Your cart is empty.</h2>";
}

?>
