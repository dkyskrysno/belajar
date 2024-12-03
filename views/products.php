<?php include 'layout/header.php'; ?>
<h1>Produk Kami</h1>
<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="../assets/img/<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                    <p class="card-text"><?php echo $product['description']; ?></p>
                    <p class="card-text">Rp<?php echo number_format($product['price'], 2); ?></p>
                    <form action="../controllers/CartController.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'layout/footer.php'; ?>
