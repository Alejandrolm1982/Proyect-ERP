<?php
class datosLogin {

    private $mysqli;
    private $data;

    public function __construct()
    {
        // Aquí asumo que Connection::conn1() devuelve el objeto de conexión
        $this->mysqli = Connection::conn1();
        $this->data = array();
    }

    public function checkLogin($username, $password)
    {
        // Utilizar sentencias preparadas para prevenir la inyección de SQL
        $stmt = $this->mysqli->prepare("SELECT * FROM Usuario WHERE nombre=? AND contraseña=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true; // Login exitoso
        } else {
            return false; // Login fallido
        }

        // Cerrar la sentencia preparada
        $stmt->close();
    }

    public function closeConnection()
    {
        // Cerrar la conexión con la base de datos
        $this->mysqli->close();
    }
}
?>


