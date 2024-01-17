<?php

    if(file_exists("../Db/Con1Db.php"))
    {
        // Llamada a la conexión
        require_once '../Db/Con1Db.php';
        //Llamada al modelo
        require_once '../Models/Insercion1Model.php';

    }
    else if(file_exists("Db/Con1Db.php"))
    {
         // Llamada a la conexión
        require_once 'Db/Con1Db.php';
        //Llamada al modelo
        require_once 'Models/Insercion1Model.php';

    }

    // Instancia del objeto
    $oData = new Datos();

    //Pillar campos de texto

    //Esto funciona pero es menos seguro que la evaluación ternaria
    $textoInsercion1 = ($_POST['textoInsercion1']);
    //Hacerlo con evaluación ternaria es mejor porque es más seguro ejemplo de ello
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = ($_POST['textoInsercion2']);
    $textoInsercion3 = ($_POST['textoInsercion3']);

    // Llamada al método
    $sql = "INSERT INTO coches (mar_coc, mod_coc, aut_coc) VALUES ('$textoInsercion1', '$textoInsercion2', '$textoInsercion3')";
    
    $oData->insertData1($sql);


    




?>