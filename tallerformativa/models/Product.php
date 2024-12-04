<?php
class Product {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Crear producto
    public function create($name, $serial, $userId) {
        $stmt = $this->pdo->prepare("INSERT INTO products (name, serial, user_id) VALUES (:name, :serial, :user_id)");
        return $stmt->execute(['name' => $name, 'serial' => $serial, 'user_id' => $userId]);
    }

    // Listar productos (solo los creados por el usuario)
    public function list($userId) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE user_id = :user_id");
        $stmt->execute(['user_id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
