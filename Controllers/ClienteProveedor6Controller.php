<?php

    if (file_exists("../Db/Con1Db.php")) {
        // Llamada a la conexión
        require_once '../Db/Con1Db.php';
        // Llamada al modelo
        require_once '../Models/ClienteProveedor6Model.php';
    } 
    else if (file_exists("Db/Con1Db.php")) 
    {
        // Llamada a la conexión
        require_once 'Db/Con1Db.php';
        // Llamada al modelo
        require_once 'Models/ClienteProveedor6Model.php';
    }

    // Tratamiento de los imput text
    $textoBusqueda = empty($_POST['textoBusqueda']) ? '' : $_POST['textoBusqueda'];

    // Instanciación de un objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from clienteproveedor where nombre like '%$textoBusqueda%' or direccion like '%$textoBusqueda%' or telefono like '%$textoBusqueda%' or correo like '%$textoBusqueda%' or tipo like '%$textoBusqueda%' order by nombre, direccion, telefono, correo, tipo";

    $data = $oData->getData1($sql);


    // Verifica que $sql no esté vacío antes de usarlo en getData1
    if (!empty($sql)) {

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