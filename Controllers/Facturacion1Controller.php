<?php
if (file_exists("../Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once '../Db/Con1Db.php';
    // Llamada al modelo
    require_once '../Models/Facturacion1Model.php';
} else if (file_exists("Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/Facturacion1Model.php';
}


// Instancia del objeto
$oData = new Datos;

// Obtén el tipo seleccionado del formulario
$selectTipo = empty($_POST['facturacion']) ? '' : $_POST['facturacion'];

// Inicializa $sql para evitar el warning de undefined variable
$sql = "";

// Construye la consulta SQL según el tipo seleccionado
if ($selectTipo == '') 
{
    // Consulta por defecto que carga toda la tabla
    $sql = "SELECT * FROM facturacion";
} 
elseif ($selectTipo == 'facturacion') 
{
    $sql = "SELECT * FROM facturacion";
} 

// Verifica que $sql no esté vacío antes de usarlo en getData1
if (!empty($sql)) {
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
                <div class='bloque1'>ID Usuario</div>
                <div class='bloque1'>ID Cliente/Proveedor</div>
                <div class='bloque1'>TIPO DE TRANSACCIÓN</div>
                <div class='bloque1'>FECHA</div>
                <div class='bloque1'>ID Factura/albaran</div>
            </div>
        ";
        foreach ($data as $row) {
            echo "
                <div class='bloque0'>
                    <a class='bloque0' href='edicionEliminacionFacturacion.php?id_facturacion=$row->id_facturacion&id_documento=$row->id_documento'> 
                        <div class='bloque1'>$row->id_usuario</div>
                        <div class='bloque1'>$row->id_cliente_proveedor</div>
                        <div class='bloque1'>$row->tipoTransaccion</div>
                        <div class='bloque1'>$row->fecha</div>
                        <div class='bloque1'>$row->id_documento</div>                       
                    </a>      
                </div>
                
            ";
        }
    }
}

?>