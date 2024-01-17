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

    public function insertGetData1($sql)
    {
        if (!empty($sql)) 
        {
            if ($this->mysqli->multi_query($sql) === TRUE) 
            {
                //echo "Nuevo registro creado correctamente";

                // Recuperar resultados solo si es una consulta SELECT

                if ($result = $this->mysqli->store_result()) 
                {
                  while ($row = $result->fetch_object()) 
                  {
                    $this->data[] = $row;
                  }
                  $result->free();
                }
                return $this->data;
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $this->mysqli->error;
            }
        }
        $this->mysqli->close();
    }
}

?>