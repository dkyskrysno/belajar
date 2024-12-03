<?php
require_once '../config/database.php';
require_once '../models/Cart.php';

$cartModel = new Cart($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $cartModel->addToCart($product_id, $quantity);
}

$cartItems = $cartModel->getCartItems();
include '../views/cart.php';
?>
