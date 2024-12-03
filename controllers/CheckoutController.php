<?php
require_once '../config/database.php';
require_once '../models/Cart.php';

$cartModel = new Cart($pdo);
$cartItems = $cartModel->getCartItems();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Proses checkout di sini, misalnya simpan data ke dalam tabel pesanan (jika ada)
    // dan kosongkan keranjang setelah checkout berhasil.

    // Kosongkan keranjang
    $cartModel->emptyCart();

    echo "<h3>Terima kasih, $name. Pesanan Anda berhasil diproses!</h3>";
    echo "<p>Pesanan Anda akan dikirim ke: $address</p>";
    echo "<p>Nomor Telepon: $phone</p>";
    echo "<a href='../index.php' class='btn btn-primary'>Kembali ke Beranda</a>";
} else {
    header("Location: ../views/cart.php");
    exit;
}
?>
