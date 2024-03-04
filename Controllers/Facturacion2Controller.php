<?php

// Recibe los datos del formulario
$id_usuario = empty($_POST['id_usuario']) ? '' : $_POST['id_usuario'];
$nombre = empty($_POST['nombre']) ? '' : $_POST['nombre'];
$tipoTransaccion = empty($_POST['tipoTransaccion']) ? '' : $_POST['tipoTransaccion'];
$fecha = empty($_POST['fecha']) ? '' : $_POST['fecha'];
$num_pedido = empty($_POST['num_pedido']) ? '' : $_POST['num_pedido'];
$vencimiento = empty($_POST['vencimiento']) ? '' : $_POST['vencimiento'];
$domicilio = empty($_POST['domicilio']) ? '' : $_POST['domicilio'];
$provincia = empty($_POST['provincia']) ? '' : $_POST['provincia'];
$nif = empty($_POST['nif']) ? '' : $_POST['nif'];

// Llamada a la conexión
require_once "../Db/Con1Db.php";
// Llamada al modelo
require_once "../Models/Facturacion2Model.php";

// Instanciación del objeto
$oData = new Datos;

$sql1 = "SELECT id_cliente_proveedor, direccion FROM clienteproveedor WHERE nombre LIKE '%$nombre%'";

// Llamada al método
$data = $oData->getData1($sql1);

// Verifica que $sql no esté vacío antes de usarlo en getData1
// Verifica que $data no esté vacío antes de asignar el ID
if (!empty($data)) 
{
    $id_cliente_proveedor = $data[0]->id_cliente_proveedor;
    $direccion = $data[0]->direccion;
} 
else {
    // Si no se encuentra ningún cliente/proveedor con el nombre dado
    echo "<div class='bloque1 negrita'>No hay ningún cliente/Proveedor con ese nombre.</div>";
    exit(); // Terminar el script si no se encuentra el cliente/proveedor
}

// Llamada al método
$sql2 = "INSERT INTO documento (fecha_emision, num_pedido, vencimiento, nombre, direccion, nif) VALUES (?, ?, ?, ?, ?, ?)";
// Ejecutar la inserción en la tabla documento
$id_documento = $oData->setDataPreparedStatements2($sql2, $fecha, $num_pedido, $vencimiento, $nombre, $direccion, $nif);

// Verificar si la inserción en documento fue exitosa
if ($id_documento) {
    // Obtener el ID del documento recién insertado
    $id_documento_insertado = $oData->getLastInsertId();

    // Verificar la existencia del id_documento antes de la inserción en facturacion
    $sql_check = "SELECT id_documento FROM documento WHERE id_documento = ?";
    $data_check = $oData->getData1($sql_check, array($id_documento_insertado));

    if (!empty($data_check)) {
        // Llamada al método
        $sql3 = "INSERT INTO facturacion (id_cliente_proveedor, id_usuario, tipoTransaccion, fecha, id_documento) VALUES (?, ?, ?, ?, ?)";
        // Ejecutar la inserción en la tabla facturacion
        $data = $oData->setDataPreparedStatements1($sql3, $id_cliente_proveedor, $id_usuario, $tipoTransaccion, $fecha, $id_documento_insertado);

        // Verificar si la inserción en facturacion fue exitosa
        if ($data) {
            // Si todo fue exitoso, redirigir a la página Facturacion1Controller.php
            header("Location: Facturacion1Controller.php");
            exit();
        } else {
            // Manejar el caso donde la inserción en facturacion falló
            echo "Error: No se pudo insertar en la tabla facturacion.";
        }
    } else {
        // Manejar el caso donde el id_documento no existe en la tabla documento
        echo "Error: El id_documento no existe en la tabla documento.";
    }
} else {
    // Manejar el caso donde la inserción en documento falló
    echo "Error: No se pudo insertar en la tabla documento.";
}

// Documentación en:
// https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements

?>



