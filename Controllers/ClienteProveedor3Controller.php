<?php

// Recibe los datos del formulario
$id_cliente_proveedor = empty($_POST['id_cliente_proveedor']) ? '' : $_POST['id_cliente_proveedor'];
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
// Llamada al modelo
require_once "../Models/ClienteProveedor3Model.php";

// Instanciación del objeto
$oData = new Datos(); // Corregido el nombre de la clase

// Llamada al método
$sql = "UPDATE clienteproveedor SET nombre = ?, direccion = ?, telefono = ?, correo = ?, tipo = ?, metodoPago = ?, fecha = ?, apellidos = ? WHERE id_cliente_proveedor = ?";
$data = $oData->setDataPreparedStatements1($sql, $nombre, $direccion, $telefono, $correo, $tipo, $metodoPago, $fecha, $apellidos, $id_cliente_proveedor);

// Devolución del resultado obtenido
echo $data;

?>
