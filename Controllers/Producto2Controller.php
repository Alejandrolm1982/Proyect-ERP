<?php

    // Recibe los datos del formulario
    $nombre = empty($_POST['nombre']) ? '' : $_POST['nombre'];
    $stock = empty($_POST['stock']) ? '' : $_POST['stock'];
    $precio = empty($_POST['precio']) ? '' : $_POST['precio'];
    $descripcion = empty($_POST['descripcion']) ? '' : $_POST['descripcion'];


    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/Producto2Model.php";

    // Instanciación del objeto
    $oData = new Datos;
    // Llamada al método
    $sql = "INSERT INTO producto (nombre, stock, precio, descripcion)
    VALUES (?, ?, ?, ?)";
    $data = $oData->setDataPreparedStatements1($sql, $nombre, $stock, $precio, $descripcion);
    
    // Devolución del resultado obtenido
    echo $data;

    // Documentación en:
    // https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements
?>