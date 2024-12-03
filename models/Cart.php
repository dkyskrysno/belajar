<?php
class Cart {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addToCart($product_id, $quantity) {
        $stmt = $this->pdo->prepare("INSERT INTO cart (product_id, quantity) VALUES (?, ?)");
        return $stmt->execute([$product_id, $quantity]);
    }

    public function getCartItems() {
        $stmt = $this->pdo->prepare("SELECT cart.*, products.name, products.price, products.image 
                                     FROM cart JOIN products ON cart.product_id = products.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function emptyCart() {
        $stmt = $this->pdo->prepare("DELETE FROM cart");
        return $stmt->execute();
    }
}
?>
