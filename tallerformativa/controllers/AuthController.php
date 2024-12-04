<?php
class AuthController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function showLogin() {
        include '../views/login_view.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cedula = $_POST['cedula'];
            $password = $_POST['password'];
            $user = $this->userModel->login($cedula, $password);

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['admin_id'] = $user['admin_id']; // Suponiendo que el admin tiene una relación con otros usuarios
                header('Location: dashboard.php');
                exit();
            } else {
                $error = 'Usuario o contraseña incorrectos.';
                include '../views/login_view.php';
            }
        }
    }

    public function dashboard() {
        include '../views/dashboard_view.php';
    }
}
?>
