<?php
  
if (file_exists("../Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once '../Db/Con1Db.php';
    // Llamada al modelo
    require_once '../Models/Producto1Model.php';
} else if (file_exists("Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/Producto1Model.php';
}

// Instancia del objeto
$oData = new Datos;

// Obtén el tipo seleccionado del formulario
$selectTipo = empty($_POST['producto']) ? '' : $_POST['producto'];

// Inicializa $sql para evitar el warning de undefined variable
$sql = "";

// Construye la consulta SQL según el tipo seleccionado
if ($selectTipo == 'producto') 
{
    $sql = "SELECT * FROM producto";
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
                <div class='bloque1'>STOCK</div>
                <div class='bloque1'>PRECIO</div>
                <div class='bloque1'>DESCRIPCIÓN</div>
            </div>
        ";
        foreach ($data as $row) {
            echo "
                <div class='bloque0'>
                    <a class='bloque0' href='edicionEliminacionProducto.php?id_producto=$row->id_producto'> 
                        <div class='bloque1'>$row->nombre</div>
                        <div class='bloque1'>$row->stock</div>
                        <div class='bloque1'>$row->precio</div>
                        <div class='bloque1'>$row->descripcion</div>
                    </a>      
                </div>
                
            ";
        }
    }
}

?>