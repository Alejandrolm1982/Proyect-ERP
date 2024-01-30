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

        // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
        public function setDataPreparedStatements1($sql, $par1, $par2, $par3, $par4, $par5)
        {
            $stmt = $this->mysqli->prepare($sql);
        
            $stmt->bind_param("ssssi", $par1, $par2, $par3, $par4, $par5);
        
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
            $this->mysqli->close();
            return $result;
        }
    }

?>