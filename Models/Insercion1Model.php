<?php

    class Datos
    {

        private $mysqli;

        public function __construct()
        {
            $this->mysqli=Connection::conn1();
        }

        // inserta datos en la BD (insert, update, delete)
        public function insertData1($sql)
        {

            if ($this->mysqli->query($sql) === TRUE) 
            {
                echo "Nuevo registro creado correctamente";
            } 
            else 
            {
                //puede dar error si intentas meter datos q no coinciden con los de la tabla, es decir los errores vendrán 
                //cuando el php no sea coherente con las tablas
                echo "Error: " . $sql . "<br>" . $this->mysqli->error;
            }
            
            $this->mysqli->close();
            
        }

    }

?>