<?php
  
if (file_exists("../Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once '../Db/Con1Db.php';
    // Llamada al modelo
    require_once '../Models/ClienteProveedor1Model.php';
} else if (file_exists("Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/ClienteProveedor1Model.php';
}

// Instancia del objeto
$oData = new Datos;

// Obtén el tipo seleccionado del formulario
$selectTipo = empty($_POST['cliente/proveedor']) ? '' : $_POST['cliente/proveedor'];

// Inicializa $sql para evitar el warning de undefined variable
$sql = "";

// Construye la consulta SQL según el tipo seleccionado
if ($selectTipo == '') 
{
    // Consulta por defecto que carga toda la tabla
    $sql = "SELECT * FROM clienteproveedor";
} 
elseif ($selectTipo == 'cliente') 
{
    $sql = "SELECT * FROM clienteproveedor WHERE tipo = 'cliente'";
} 
elseif ($selectTipo == 'proveedor') 
{
    $sql = "SELECT * FROM clienteproveedor WHERE tipo = 'proveedor'";
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
                <div class='bloque1'>NOMBRE</div>
                <div class='bloque1'>DIRECCION</div>
                <div class='bloque1'>TELÉFONO</div>
                <div class='bloque1'>CORREO</div>
                <div class='bloque1'>TIPO</div>
            </div>
        ";
        foreach ($data as $row) {
            echo "
                <div class='bloque0'>
                    <a class='bloque0' href='edicionEliminacionClienteProveedor.php?id_cliente_proveedor=$row->id_cliente_proveedor'> 
                        <div class='bloque1'>$row->nombre</div>
                        <div class='bloque1'>$row->direccion</div>
                        <div class='bloque1'>$row->telefono</div>
                        <div class='bloque1'>$row->correo</div>
                        <div class='bloque1'>$row->tipo</div>
                    </a>      
                </div>
                
            ";
        }
    }
}

?>
