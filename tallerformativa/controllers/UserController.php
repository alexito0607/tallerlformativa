<?php
class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $cedula = $_POST['cedula'];
            $password = $_POST['password'];

            $adminId = $_SESSION['admin_id']; // Asumimos que el admin está logueado

            $this->userModel->create($name, $cedula, $password);
            header('Location: dashboard.php');
        } else {
            include '../views/user_create_view.php';
        }
    }

    public function list() {
        $adminId = $_SESSION['admin_id'];
        $users = $this->userModel->list($adminId);
        include '../views/user_list_view.php';
    }
}
?>
