<?php
require_once '../config/database.php';
require_once '../models/Product.php';

$productModel = new Product($pdo);
$products = $productModel->getAllProducts();
include '../views/products.php';
?>
