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
    $sql = "select * from facturacion where id_usuario like '%$textoBusqueda3%' or id_cliente_proveedor like '%$textoBusqueda3%' or tipoTransaccion like '%$textoBusqueda3%' or fecha like '%$textoBusqueda3%' or id_documento like '%$textoBusqueda3%' ";

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
                    <div class='bloque1'>ID Usuario</div>                
                    <div class='bloque1'>ID Cliente/Proveedor</div>
                    <div class='bloque1'>TIPO DE TRANSACCIÓN</div>
                    <div class='bloque1'>FECHA</div>
                    <div class='bloque1'>ID Factura/albaran</div>
                </div>
            ";
            foreach ($data as $row) {
                echo "
                    <div class='bloque0'>
                        <a class='bloque0' href='edicionEliminacionFacturacion.php?id_facturacion=$row->id_facturacion'> 
                            <div class='bloque1'>$row->id_usuario</div>
                            <div class='bloque1'>$row->id_cliente_proveedor</div>
                            <div class='bloque1'>$row->tipoTransaccion</div>
                            <div class='bloque1'>$row->fecha</div>
                            <div class='bloque1'>$row->id_documento</div>
                        </a>      
                    </div>
                    
                ";
            }
        }
    }
?>