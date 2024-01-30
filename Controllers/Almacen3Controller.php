<?php

// Recibe los datos del formulario
$id_almacen = empty($_POST['id_almacen']) ? '' : $_POST['id_almacen'];
$fechas = empty($_POST['fecha']) ? '' : $_POST['fecha'];
$capacidad = empty($_POST['capacidad']) ? '' : $_POST['capacidad'];
$ubicacion = empty($_POST['ubicacion']) ? '' : $_POST['ubicacion'];

// Llamada a la conexión
require_once "../Db/Con1Db.php";
// Llamada al modelo
require_once "../Models/Almacen3Model.php";

// Instanciación del objeto
$oData = new Datos();

// Llamada al método
$sql = "UPDATE almacen SET fechas = ?, capacidad = ?, ubicacion = ? WHERE id_almacen = ?";
$data = $oData->setDataPreparedStatements1($sql, $fechas, $capacidad, $ubicacion , $id_almacen);

// Devolución del resultado obtenido
echo $data;

?>