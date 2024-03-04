<?php

    if (file_exists("../Db/Con1Db.php")) {
        // Llamada a la conexión
        require_once '../Db/Con1Db.php';
        // Llamada al modelo
        require_once '../Models/Facturacion6Model.php';
    } 
    else if (file_exists("Db/Con1Db.php")) 
    {
        // Llamada a la conexión
        require_once 'Db/Con1Db.php';
        // Llamada al modelo
        require_once 'Models/Facturacion6Model.php';
    }

    // Tratamiento de los imput text
    $textoBusqueda3 = empty($_POST['textoBusqueda3']) ? '' : $_POST['textoBusqueda3'];

    // Instanciación de un objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from facturacion where tipoTransaccion like '%$textoBusqueda3%' or albaran like '%$textoBusqueda3%' or fecha like '%$textoBusqueda3%' or factura like '%$textoBusqueda3%' order by tipoTransaccion, albaran, fecha, factura";

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
                    <div class='bloque1'>tipoTransaccion</div>
                    <div class='bloque1'>albaran</div>
                    <div class='bloque1'>fecha</div>
                    <div class='bloque1'>factura</div>
                </div>
            ";
            foreach ($data as $row) {
                echo "
                    <div class='bloque0'>
                        <a class='bloque0' href='edicionEliminacionFacturacion.php?id_facturacion=$row->id_facturacion'> 
                            <div class='bloque1'>$row->tipoTransaccion</div>
                            <div class='bloque1'>$row->albaran</div>
                            <div class='bloque1'>$row->fecha</div>
                            <div class='bloque1'>$row->factura</div>
                        </a>      
                    </div>
                    
                ";
            }
        }
    }
?>