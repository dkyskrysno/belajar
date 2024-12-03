<?php include 'layout/header.php'; ?>
<h1>Checkout</h1>

<?php if (count($cartItems) > 0): ?>
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
            <?php $grandTotal = 0; ?>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>Rp<?php echo number_format($item['price'], 2); ?></td>
                    <td>Rp<?php echo number_format($item['quantity'] * $item['price'], 2); ?></td>
                </tr>
                <?php $grandTotal += $item['quantity'] * $item['price']; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h4>Total Pembayaran: Rp<?php echo number_format($grandTotal, 2); ?></h4>

    <form action="../controllers/CheckoutController.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat Pengiriman</label>
            <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
    </form>

<?php else: ?>
    <p>Keranjang belanja Anda kosong.</p>
<?php endif; ?>

<?php include 'layout/footer.php'; ?>
