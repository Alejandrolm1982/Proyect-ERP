<?php
  
    // Tratamiento de los input type='number'    
    $id_facturacion = empty($_GET['id_facturacion']) ? 0 : $_GET['id_facturacion'];
  
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/Facturacion4Model.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from facturacion where id_facturacion=$id_facturacion";
    $data = $oData->getData1($sql);

    if(empty($data))
    {

    }
    else
    {
        foreach ($data as $row)
        {
            $tipoTransaccion = $row->tipoTransaccion;
            $fecha = $row->fecha;
        }
    }

?>