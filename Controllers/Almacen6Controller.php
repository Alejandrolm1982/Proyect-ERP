<?php

    if (file_exists("../Db/Con1Db.php")) {
        // Llamada a la conexión
        require_once '../Db/Con1Db.php';
        // Llamada al modelo
        require_once '../Models/Almacen6Model.php';
    } 
    else if (file_exists("Db/Con1Db.php")) 
    {
        // Llamada a la conexión
        require_once 'Db/Con1Db.php';
        // Llamada al modelo
        require_once 'Models/Almacen6Model.php';
    }

    // Tratamiento de los imput text
    $textoBusqueda2 = empty($_POST['textoBusqueda2']) ? '' : $_POST['textoBusqueda2'];

    // Instanciación de un objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from almacen where fechas like '%$textoBusqueda2%' or capacidad like '%$textoBusqueda2%' or ubicacion like '%$textoBusqueda2%' order by fechas, capacidad, ubicacion";

    $data = $oData->getData1($sql);


    // Verifica que $sql no esté vacío antes de usarlo en getData1
    if (!empty($sql)) {
        $data = $oData->getData1($sql);

        if (empty($data)) {
            echo "
                <div class='bloque1 negrita'>
                    No hay datos.
                </div>
            ";
        } else {
            echo "
                <div class='bloque0 negrita'>
                    <div class='bloque1'>FECHAS</div>
                    <div class='bloque1'>CAPACIDAD</div>
                    <div class='bloque1'>UBICACION</div>
                </div>
            ";
            foreach ($data as $row) {
                echo "
                    <div class='bloque0'>
                        <a class='bloque0' href='edicionEliminacionAlmacen.php?id_almacen=$row->id_almacen'> 
                            <div class='bloque1'>$row->fechas</div>
                            <div class='bloque1'>$row->capacidad</div>
                            <div class='bloque1'>$row->ubicacion</div>
                        </a>      
                    </div>
                    
                ";
            }
        }
    }
?>