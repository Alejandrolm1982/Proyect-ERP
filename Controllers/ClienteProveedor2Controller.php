<?php

    // Recibe los datos del formulario
    $nombre = empty($_POST['nombre']) ? '' : $_POST['nombre'];
    $apellidos = empty($_POST['apellidos']) ? '' : $_POST['apellidos'];
    $telefono = empty($_POST['telefono']) ? '' : $_POST['telefono'];
    $correo = empty($_POST['correo']) ? '' : $_POST['correo'];
    $direccion = empty($_POST['direccion']) ? '' : $_POST['direccion'];
    $tipo = empty($_POST['tipo']) ? '' : $_POST['tipo'];
    $metodoPago = empty($_POST['metodoPago']) ? '' : $_POST['metodoPago'];
    $fecha = empty($_POST['fecha']) ? '' : $_POST['fecha'];

    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/ClienteProveedor2Model.php";

    // Instanciación del objeto
    $oData = new Datos;
    // Llamada al método
    $sql = "INSERT INTO clienteproveedor (nombre, direccion, telefono, correo, tipo, metodoPago, fecha, apellidos)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $data = $oData->setDataPreparedStatements1($sql, $nombre, $direccion, $telefono, $correo, $tipo, $metodoPago, $fecha, $apellidos);
    
    // Devolución del resultado obtenido
    echo $data;

    header("Location: ClienteProveedor1Controller.php");
    exit();

    // Documentación en:
    // https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements
?>