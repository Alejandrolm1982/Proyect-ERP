<?php
class Connection
{
    public static function conn1()
    {
        // Xampp
        // $mysqli = new mysqli('localhost', 'root', '', 'bd1');
        // Mampp
        // $mysqli = new mysqli('localhost', 'adminERP', 'AlejandroIvanERP', 'proyecto_erp');

        $mysqli = new mysqli('localhost', 'adminERP', 'AlejandroIvanERP', 'proyecto_erp');

        if($mysqli->connect_errno)
        {
            printf("Error en la conexion: %s\n", $mysqli->connect_errno);
        }
        else
        {
            $mysqli->set_charset("utf8");
            return $mysqli;
        }
    }
}
?>