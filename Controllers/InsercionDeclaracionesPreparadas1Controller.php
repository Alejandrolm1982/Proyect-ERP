<?php

    // Tratamiento de los input type='text'
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? '' : $_POST['textoInsercion3'];

    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    require_once "../Models/InsercionDeclaracionesPreparadas1Model.php";

    // Instanciación del objeto
    $oData = new Datos;
    // Llamada al método (Aquí ya estamos empezando el STATEMENT)
    $sql = "INSERT INTO COCHES (mar_coc, mod_coc, aut_coc) VALUES (?,?,?)";
    $data = $oData -> setDataPreparedStatements1($sql, $textoInsercion1, $textoInsercion2, $textoInsercion3);

    // Devolución del resultado obtenido
    echo $data;


?>