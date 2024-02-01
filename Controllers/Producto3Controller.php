<?php

// Recibe los datos del formulario
$id_producto = empty($_POST['id_producto']) ? '' : $_POST['id_producto'];
$nombre = empty($_POST['nombre']) ? '' : $_POST['nombre'];
$stock = empty($_POST['stock']) ? '' : $_POST['stock'];
$precio = empty($_POST['precio']) ? '' : $_POST['precio'];
$descripcion = empty($_POST['descripcion']) ? '' : $_POST['descripcion'];

// Llamada a la conexión
require_once "../Db/Con1Db.php";
// Llamada al modelo
require_once "../Models/Producto3Model.php";

// Instanciación del objeto
$oData = new Datos();

// Llamada al método
$sql = "UPDATE producto SET nombre = ?, stock = ?, precio = ?, descripcion = ? WHERE id_producto = ?";
$data = $oData->setDataPreparedStatements1($sql, $nombre, $stock, $precio, $descripcion, $id_producto);

// Devolución del resultado obtenido
echo $data;
?>