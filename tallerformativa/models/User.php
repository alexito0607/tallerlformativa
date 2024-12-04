<?php
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Validar login
    public function login($cedula, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE cedula = :cedula AND password = :password");
        $stmt->execute(['cedula' => $cedula, 'password' => $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear usuario
    public function create($name, $cedula, $password) {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, cedula, password) VALUES (:name, :cedula, :password)");
        return $stmt->execute(['name' => $name, 'cedula' => $cedula, 'password' => $password]);
    }

    // Listar usuarios (solo los creados por el administrador)
    public function list($adminId) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE admin_id = :admin_id");
        $stmt->execute(['admin_id' => $adminId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
