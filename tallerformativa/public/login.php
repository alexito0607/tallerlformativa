<?php
require_once '../config/database.php';
require_once '../models/User.php';
require_once '../controllers/AuthController.php';

$userModel = new User($pdo);
$authController = new AuthController($userModel);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $authController->login();
} else {
    $authController->showLogin();
}
?>
