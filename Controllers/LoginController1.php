<?php
// controllers/UserController.php
require_once 'Models/LoginModel1.php';

class UserController {
    public function procesarFormulario() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new UserModel();
        $result = $userModel->verificarDatos($username, $password);

        // Después de verificar los datos
if ($_SESSION['error_message']) {
    echo json_encode(array('success' => false, 'message' => $_SESSION['error_message']));
    // Limpia la variable de sesión después de usarla
    unset($_SESSION['error_message']);
    exit();
} else {
    // Si los datos coinciden, redirige al usuario a home.php
    header("Location: home.php");
    exit();
}
    }
}






