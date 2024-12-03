<?php include 'layout/header.php'; ?>
<h1>Keranjang Belanja</h1>
<table class="table">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0; ?>
        <?php foreach ($cartItems as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>Rp<?php echo number_format($item['price'], 2); ?></td>
                <td>Rp<?php echo number_format($item['quantity'] * $item['price'], 2); ?></td>
            </tr>
            <?php $total += $item['quantity'] * $item['price']; ?>
        <?php endforeach; ?>
    </tbody>
</table>
<p>Total Belanja: Rp<?php echo number_format($total, 2); ?></p>
<a href="../controllers/CheckoutController.php" class="btn btn-success">Checkout</a>
<?php include 'layout/footer.php'; ?>
