<?php
session_start();

require_once '../config/database.php';
require_once '../models/User.php';
require_once '../controllers/UserController.php';

$userModel = new User($pdo);
$userController = new UserController($userModel);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Llamamos al controlador para crear el usuario
    $userController->create();
} else {
    // Mostramos la vista del formulario de creación
    include '../views/user_create_view.php';
}
?>
