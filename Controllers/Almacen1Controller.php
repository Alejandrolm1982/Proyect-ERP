<?php
  
if (file_exists("../Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once '../Db/Con1Db.php';
    // Llamada al modelo
    require_once '../Models/Almacen1Model.php';
} else if (file_exists("Db/Con1Db.php")) {
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/Almacen1Model.php';
}

// Instancia del objeto
$oData = new Datos;

// Obtén el tipo seleccionado del formulario
$selectTipo = empty($_POST['almacen']) ? '' : $_POST['almacen'];

// Inicializa $sql para evitar el warning de undefined variable
$sql = "";

// Construye la consulta SQL según el tipo seleccionado
if ($selectTipo == 'almacen') 
{
    $sql = "SELECT * FROM almacen";
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
                <div class='bloque1'>FECHA</div>
                <div class='bloque1'>CAPACIDAD</div>
                <div class='bloque1'>UBICACION</div>
            </div>
        ";
        foreach ($data as $row) {
            echo "
                <div class='bloque0'>
                    <a class='bloque0' href='edicionEliminacionAlmacen.php?id_almacen=$row->id_almacen'> 
                        <div class='bloque1'>$row->fechas</div>
                        <div class='bloque1'>$row->capacidad</div>
                        <div class='bloque1'>$row->ubicacion</div>
                    </a>      
                </div>
                
            ";
        }
    }
}

?>
