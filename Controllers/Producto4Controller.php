<?php
  
    // Tratamiento de los input type='number'    
    $id_producto = empty($_GET['id_producto']) ? 0 : $_GET['id_producto'];
  
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/Producto4Model.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from producto where id_producto=$id_producto";
    $data = $oData->getData1($sql);

    if(empty($data))
    {

    }
    else
    {
        foreach ($data as $row)
        {
            $nombre = $row->nombre;
            $stock = $row->stock;
            $precio = $row->precio;
            $descripcion = $row->descripcion;
        }
    }

?>