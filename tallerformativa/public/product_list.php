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

// Llamamos al controlador para obtener la lista de productos creados por el usuario
$products = $productController->list();

include '../views/product_list_view.php';
?>
