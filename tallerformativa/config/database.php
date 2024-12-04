<?php
$host = 'localhost';
$dbname = 'mi_aplicativo_db';
$username = 'admin'; // Cambia esto según tu configuración
$password = '12345678'; // Cambia esto según tu configuración

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>
