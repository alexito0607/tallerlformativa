<?php
session_start();

// Si no está autenticado, redirige al login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../config/database.php';
require_once '../models/Product.php';
require_once '../controllers/ProductController.php';

$productModel = new Product($pdo);
$productController = new ProductController($productModel);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Llamamos al controlador para crear el producto
    $productController->create();
} else {
    // Mostramos el formulario de creación de producto
    include '../views/product_create_view.php';
}
?>
