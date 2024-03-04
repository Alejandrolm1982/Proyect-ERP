<?php

class Datos
{
    private $mysqli;
    private $data;

    public function __construct()
    {
        $this->openConnection();
        $this->data = array();
    }

    // Function to open the database connection
    private function openConnection()
    {
        $this->mysqli = Connection::conn1();
    }

    // Function to close the database connection
    private function closeConnection()
    {
        if ($this->mysqli) {
            $this->mysqli->close();
        }
    }

    // Devuelve datos de la BD (select)
    public function getData1($sql, $parametros = array())
    {
        $this->openConnection(); // Open connection
        
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
    
                $this->closeConnection(); // Close connection
                
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
    
        $this->closeConnection(); // Close connection
        
        return $this->data;
    }        

    //INSERT EN FACTURACION
    // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
    public function setDataPreparedStatements1($sql, $par1, $par2, $par3, $par4, $par5)
    {
        $this->openConnection(); // Open connection
        
        $stmt = $this->mysqli->prepare($sql);
    
        $stmt->bind_param("sssss", $par1, $par2, $par3, $par4, $par5);
    
        if(!$stmt->execute())
        {
            $result = "La operación no se ha podido realizar. Detalles del error: " . $stmt->error;
            // También puedes agregar la línea siguiente para ver el error de la consulta preparada
            // echo "Detalle del error en la consulta preparada: " . $stmt->error;
        }
        else
        {
            $result = "Operación realizada con éxito.";
        }
    
        $stmt->close();
        
        $this->closeConnection(); // Close connection
        
        return $result;
    }


    //INSERT EN DOCUMENTO
    public function setDataPreparedStatements2($sql, $par1, $par2, $par3, $par4, $par5, $par6)
    {
        $this->openConnection(); // Open connection
        
        $stmt = $this->mysqli->prepare($sql);

        $stmt->bind_param("ssssss", $par1, $par2, $par3, $par4, $par5, $par6);

        $result = "";

        if($stmt->execute())
        {
            // Obtener el ID del último registro insertado
            $sql_get_id = "SELECT LAST_INSERT_ID() AS id_documento";
            $result_id = $this->mysqli->query($sql_get_id);
            $row = $result_id->fetch_assoc();
            $id_documento = $row['id_documento'];
            
            $result = "Operación realizada con éxito. ID del documento insertado: " . $id_documento;
        }
        else
        {
            $result = "La operación no se ha podido realizar. Detalles del error: " . $stmt->error;
        }

        $stmt->close();
        
        $this->closeConnection(); // Close connection
        
        return $id_documento;
    }
}

?>

