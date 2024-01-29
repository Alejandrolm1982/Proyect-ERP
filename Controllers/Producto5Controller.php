<?php

    // Tratamiento de los input type='text'    
    $textoEliminacion0 = empty($_POST['textoEliminacion0']) ? 0 : $_POST['textoEliminacion0'];

    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/Producto5Model.php";

    // Instanciación del objeto
    $oData = new Datos;
    // Llamada al método
    $sql = "DELETE FROM producto WHERE id_producto = ?";
    $data = $oData->setDataPreparedStatements1($sql, $textoEliminacion0);
    
    
    // Devolución del resultado obtenido
    echo $data;

?>