<?php
  
    // Tratamiento de los input type='number'    
    $id_cliente_proveedor = empty($_GET['id_cliente_proveedor']) ? 0 : $_GET['id_cliente_proveedor'];
  
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/ClienteProveedor4Model.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from clienteproveedor where id_cliente_proveedor=$id_cliente_proveedor";
    $data = $oData->getData1($sql);

    if(empty($data))
    {

    }
    else
    {
        foreach ($data as $row)
        {
            $nombre = $row->nombre;
            $apellidos = $row->apellidos;
            $telefono = $row->telefono;
            $correo = $row->correo;
            $direccion = $row->direccion;
            $metodoPago = $row->metodoPago;
            $fecha = $row->fecha;
            $tipo = $row->tipo;
        }
    }

?>