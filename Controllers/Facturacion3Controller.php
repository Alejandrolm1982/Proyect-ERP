<?php

// Recibe los datos del formulario
$id_facturacion = empty($_POST['id_facturacion']) ? '' : $_POST['id_facturacion'];
$tipoTransaccion = empty($_POST['tipoTransaccion']) ? '' : $_POST['tipoTransaccion'];
$fecha = empty($_POST['fecha']) ? '' : $_POST['fecha'];
$factura = empty($_POST['factura']) ? '' : $_POST['factura'];
$albaran = empty($_POST['albaran']) ? '' : $_POST['albaran'];


// Llamada a la conexión
require_once "../Db/Con1Db.php";
// Llamada al modelo
require_once "../Models/Facturacion3Model.php";

// Instanciación del objeto
$oData = new Datos(); 

// Llamada al método
$sql = "UPDATE facturacion SET tipoTransaccion = ?, fecha = ?, factura = ?, albaran = ? WHERE id_facturacion = ?";
$data = $oData->setDataPreparedStatements1($sql, $tipoTransaccion, $fecha, $factura, $albaran, $id_facturacion);

// Devolución del resultado obtenido
echo $data;

?>