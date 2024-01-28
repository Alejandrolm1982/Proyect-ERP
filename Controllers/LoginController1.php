<?php
if (file_exists("../Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once '../Db/Con1Db.php';
    // Llamada al modelo
    require_once '../Models/LoginModel1.php';
} else if (file_exists("Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/LoginModel1.php';
}

class usuarioController
{
    private $model;

    public function __construct()
    {
        // Crear una instancia del modelo
        $this->model = new datosLogin();
    }

    public function login()
    {
        if (isset($_POST['name']) && isset($_POST['password'])) {
            $username = $_POST['name'];
            $password = $_POST['password'];

            // Usar el método del modelo para verificar el inicio de sesión
            $loginSuccess = $this->model->checkLogin($username, $password);

            if ($loginSuccess) {
                // Si el login es exitoso, redirige al usuario a home.php
                header("Location: home.php");
                exit();
            } else {
                // Si el login falla, puedes realizar alguna acción (por ejemplo, mostrar un mensaje de error)
                echo "Credenciales incorrectas. Inténtalo de nuevo.";
            }
        }
    }
}

// Instanciar el controlador
$controller = new usuarioController();

// Manejar la solicitud de inicio de sesión
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $controller->login();
}
?>
