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
        public function getData1($sql)
        {
            if(!$result = $this->mysqli->query($sql))
            {
                echo "La operación no se ha podido realizar.";
                // También puedes habilitar estos comentarios para obtener detalles sobre el error.
                // echo "Detalle del error en la consulta (getData1) - ";
                // echo "Número de error: " . $this->mysqli->errno . " - ";
                // echo "Descripción del error: " . $this->mysqli->error;
                return false; // Devuelve falso para indicar que la consulta no fue exitosa.
            }
            else
            {
                $data = array();
                while($row = $result->fetch_object())
                {
                    $data[] = $row;
                }
                $result->close(); // Cierra el conjunto de resultados.
                return $data;
            }
        }
        

    }

?>