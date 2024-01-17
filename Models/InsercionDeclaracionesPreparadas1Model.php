<?php 

    class Datos
    {

        private $mysqli;
        private $data;

        public function __construct()
        {
            $this->mysqli = Connection::conn1();
            $this->data = array();
        }

        // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
        public function setDataPreparedStatements1($sql, $par1, $par2, $par3)
        {
            $stmt = $this->mysqli->prepare($sql);
            $stmt -> bind_param("ssi", $par1, $par2, $par3);
            //el ssi significa que le paso dos strings y un int
            // i int
            // d float
            // s string
            // b blob

            if(!$stmt->execute())
            {
                $result = "La operación no se ha podido realizar.";
                // echo "Detalle del error en la consulta (setDataPreparedStatements1) - ";
                // echo "Número de error: " . $this->mysqli->errno . " - ";
                // echo "Descripción del error: " . $this->mysqli->error;
            }
            else
            {
                $result = "Operación realizada con exito";
            }

            $this->mysqli->close();
            return $result;
        }

    }

?>