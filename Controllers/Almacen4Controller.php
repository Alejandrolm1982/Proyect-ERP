<?php
  
    // Tratamiento de los input type='number'    
    $id_almacen = empty($_GET['id_almacen']) ? 0 : $_GET['id_almacen'];
  
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/Almacen4Model.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from almacen where id_almacen=$id_almacen";
    $data = $oData->getData1($sql);

    if(empty($data))
    {

    }
    else
    {
        foreach ($data as $row)
        {
            $fechas = $row->fechas;
            $capacidad = $row->capacidad;
            $ubicacion = $row->ubicacion;
        }
    }

?>