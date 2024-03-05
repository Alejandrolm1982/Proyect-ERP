<?php
session_start();
if (file_exists("../Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once '../Db/Con1Db.php';
    // Llamada al modelo
    require_once '../Models/Facturacion7Model.php';
} else if (file_exists("Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/Facturacion7Model.php';
}

$id_documento = $_SESSION['id_documento'];


// Instancia del objeto
$oData = new Datos;

// Construye la consulta SQL utilizando el valor de id_documento
$sql = "SELECT * FROM documento WHERE id_documento=$id_documento";
// Llamada al método para obtener los datos
$data = $oData->getData1($sql);

if (empty($data)) {
    echo "
        <div class='bloque1 negrita'>
            No hay datos.
        </div>
    ";
} else {
    echo "
        <div class='bloque0 negrita'>
            <div class='bloque1'>Fecha Emisión</div>
            <div class='bloque1'>Número de pedido</div>
            <div class='bloque1'>Vencimiento</div>
            <div class='bloque1'>Nombre del cliente/proveedor</div>
            <div class='bloque1'>dirección</div>
            <div class='bloque1'>nif</div>
        </div>
    ";
    foreach ($data as $row) {
        echo "
            <div class='bloque0'>
                <div class='bloque1'>$row->fecha_emision</div>
                <div class='bloque1'>$row->num_pedido</div>
                <div class='bloque1'>$row->vencimiento</div>
                <div class='bloque1'>$row->nombre</div>   
                <div class='bloque1'>$row->direccion</div> 
                <div class='bloque1'>$row->nif</div>                         
            </div>
        ";
    }
}
?>
