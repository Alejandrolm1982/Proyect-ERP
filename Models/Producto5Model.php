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
        public function setDataPreparedStatements1($sql, $par1)
        {
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param("s", $par1); // i int, d float, s string, b blob

            if(!$stmt->execute())
            {
                $result = "La operación no se ha podido realizar.";
                // echo "Detalle del error en la consulta (setDataPreparedStatements1) - ";
                // echo "Numero del error: " . $this->mysqli->errno . " - ";
                // echo "Descripcion del error: " . $this->mysqli->error;                
            }
            else
            {
                $result = "Operación realizada con éxito.";
            }
            
            $this->mysqli->close();
            return $result;
            
        }
    }

?>