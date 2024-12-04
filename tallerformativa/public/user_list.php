<?php
session_start();

// Si no está autenticado, redirige al login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../config/database.php';
require_once '../models/User.php';
require_once '../controllers/UserController.php';

$userModel = new User($pdo);
$userController = new UserController($userModel);


$users = $userController->list();

include '../views/user_list_view.php';
?>