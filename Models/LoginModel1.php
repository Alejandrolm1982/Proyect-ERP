<?php
require_once 'Db/Con1Db.php';
// models/UserModel.php

class UserModel {
    private $conn;

    public function __construct() {
        // Inicia la sesión aquí
        session_start();

        // Instancia la conexión aquí
        $this->conn = Connection::conn1();
    }

    public function verificarDatos($username, $password) {
        // Consulta SQL (reemplaza con tu consulta real)
        $sql = "SELECT id_usuario FROM usuario WHERE nombre = ? AND contraseña = ?";

        // Preparar la consulta
        if ($stmt = $this->conn->prepare($sql)) {
            // Vincular los parámetros
            $stmt->bind_param("ss", $username, $password);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Obtener resultados
                $result = $stmt->get_result();

                // Verificar el número de filas afectadas
                if ($result->num_rows > 0) {
                    // Los datos coinciden
                    // Obtener el id_usuario
                    $row = $result->fetch_assoc();
                    $id_usuario = $row['id_usuario'];
                    
                    // Guardar el id_usuario en la variable de sesión
                    $_SESSION['id_usuario'] = $id_usuario;

                    // Redirige al usuario a home.php
                    header("Location: Home.php");
                    exit();
                } else {
                    // Los datos no coinciden
                    // Establece el mensaje de error en la variable de sesión
                    $_SESSION['error_message'] = 'Los datos no coinciden';
                    return false;
                }
            } else {
                // Error al ejecutar la consulta
                echo "Error al ejecutar la consulta: " . $stmt->error;
                return false;
            }
        } else {
            // Error al preparar la consulta
            echo "Error al preparar la consulta: " . $this->conn->error;
            return false;
        }
    }
}
?>







