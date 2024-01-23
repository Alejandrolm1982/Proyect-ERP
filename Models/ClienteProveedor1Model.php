<?php

    class Datos
    {

        private $mysqli;
        private $data;

        public function __construct()
        {
            $this->mysqli=Connection::conn1();
            $this->data=array();
        }

        // Devuelve datos de la BD (select)
        public function getData1($sql, $parametros = array())
        {
            // Preparar la consulta
            if ($stmt = $this->mysqli->prepare($sql)) {
                
                // Verificar si hay parámetros para vincular
                if (!empty($parametros)) {
                    // Tipos de datos de los parámetros (por ejemplo, "s" para cadena, "i" para entero)
                    $tipos = str_repeat('s', count($parametros));
                    
                    // Vincular los parámetros
                    $stmt->bind_param($tipos, ...$parametros);
                }
        
                // Ejecutar la consulta
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
        
                    while ($rows = $result->fetch_object()) {
                        $this->data[] = $rows;
                    }
        
                    // Cerrar la sentencia preparada
                    $stmt->close();
        
                    return $this->data;
                } else {
                    echo "La operación no se ha podido realizar.";
                    // Puedes imprimir detalles del error si es necesario
                    // echo "Número de error: " . $stmt->errno . " - ";
                    // echo "Descripción del error: " . $stmt->error;
                }
            } else {
                echo "Error al preparar la consulta.";
                // Puedes imprimir detalles del error si es necesario
                // echo "Número de error: " . $this->mysqli->errno . " - ";
                // echo "Descripción del error: " . $this->mysqli->error;
            }
        
            // Cerrar la conexión
            $this->mysqli->close();
        
            return $this->data;
        }

    }

?>