<?php

    if (file_exists("../Db/Con1Db.php")) {
        // Llamada a la conexión
        require_once '../Db/Con1Db.php';
        // Llamada al modelo
        require_once '../Models/Producto6Model.php';
    } 
    else if (file_exists("Db/Con1Db.php")) 
    {
        // Llamada a la conexión
        require_once 'Db/Con1Db.php';
        // Llamada al modelo
        require_once 'Models/Producto6Model.php';
    }

    // Tratamiento de los imput text
    $textoBusqueda4 = empty($_POST['textoBusqueda4']) ? '' : $_POST['textoBusqueda4'];

    // Instanciación de un objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from producto where nombre like '%$textoBusqueda4%' or stock like '%$textoBusqueda4%' or precio like '%$textoBusqueda4%' or descripcion like '%$textoBusqueda4%' order by nombre, stock, precio, descripcion";

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
                    <div class='bloque1'>NOMBRE</div>
                    <div class='bloque1'>STOCK</div>
                    <div class='bloque1'>PRECIO</div>
                    <div class='bloque1'>DESCRIPCION</div>
                </div>
            ";
            foreach ($data as $row) {
                echo "
                    <div class='bloque0'>
                        <a class='bloque0' href='edicionEliminacionProducto.php?id_producto=$row->id_producto'> 
                            <div class='bloque1'>$row->nombre</div>
                            <div class='bloque1'>$row->stock</div>
                            <div class='bloque1'>$row->precio</div>
                            <div class='bloque1'>$row->descripcion</div>
                        </a>      
                    </div>
                    
                ";
            }
        }
    }
?>