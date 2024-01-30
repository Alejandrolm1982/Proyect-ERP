<?php

    // Recibe los datos del formulario
    $tipoTransaccion = empty($_POST['tipoTransaccion']) ? '' : $_POST['tipoTransaccion'];
    $fecha = empty($_POST['fecha']) ? '' : $_POST['fecha'];
    $factura = empty($_POST['factura']) ? '' : $_POST['factura'];
    $albaran = empty($_POST['albaran']) ? '' : $_POST['albaran'];
    

    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/Facturacion2Model.php";

    // Instanciación del objeto
    $oData = new Datos;
    // Llamada al método
    $sql = "INSERT INTO facturacion (tipoTransaccion, fecha, factura, albaran) VALUES (?, ?, ?, ?)";
    $data = $oData->setDataPreparedStatements1($sql, $tipoTransaccion, $fecha, $factura, $albaran);
    
    // Devolución del resultado obtenido
    echo $data;

    // Documentación en:
    // https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements
?>