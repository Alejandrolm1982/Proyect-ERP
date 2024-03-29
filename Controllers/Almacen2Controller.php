<?php

    // Recibe los datos del formulario
    $fecha = empty($_POST['fecha']) ? '' : $_POST['fecha'];
    $capacidad = empty($_POST['capacidad']) ? '' : $_POST['capacidad'];
    $ubicacion = empty($_POST['ubicacion']) ? '' : $_POST['ubicacion'];


    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/Almacen2Model.php";

    // Instanciación del objeto
    $oData = new Datos;
    // Llamada al método
    $sql = "INSERT INTO almacen (fechas, capacidad, ubicacion)
    VALUES (?, ?, ?)";
    $data = $oData->setDataPreparedStatements1($sql, $fecha, $capacidad, $ubicacion);
    
    // Devolución del resultado obtenido
    echo $data;

    header("Location: Almacen1Controller.php");
    exit();


    // Documentación en:
    // https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements
?>