<?php
class ProductController {
    private $productModel;

    public function __construct($productModel) {
        $this->productModel = $productModel;
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $serial = $_POST['serial'];
            $userId = $_SESSION['user_id']; // El ID del usuario logueado

            $this->productModel->create($name, $serial, $userId);
            header('Location: product_list.php');
        } else {
            include '../views/product_create_view.php';
        }
    }

    public function list() {
        $userId = $_SESSION['user_id'];
        $products = $this->productModel->list($userId);
        include '../views/product_list_view.php';
    }
}
?>
