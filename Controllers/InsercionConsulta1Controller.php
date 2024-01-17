<?php

    if(file_exists("../Db/Con1Db.php"))
    {
        // Llamada a la conexión
        require_once '../Db/Con1Db.php';
        //Llamada al modelo
        require_once '../Models/InsercionConsulta1Model.php';

    }
    else if(file_exists("Db/Con1Db.php"))
    {
         // Llamada a la conexión
        require_once 'Db/Con1Db.php';
        //Llamada al modelo
        require_once 'Models/InsercionConsulta1Model.php';

    }

    // Instancia del objeto
    $oData = new Datos();

    //Pillar campos de texto
    //Esto funciona pero es menos seguro que la evaluación ternaria
    //$textoInsercion1 = ($_POST['textoInsercion1']);
    //Hacerlo con evaluación ternaria es mejor porque es más seguro ejemplo de ello
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? '' : $_POST['textoInsercion3'];


    // Tratamiento del evento que produce la consulta
    $textoConsulta1 = empty($_POST['botonInsercion2']) ? '' : $_POST['botonInsercion2'];

    
    
    // Concatenación de consultas SQL
    $sqlInsert = "INSERT INTO coches (mar_coc, mod_coc, aut_coc) VALUES ('$textoInsercion1', '$textoInsercion2', '$textoInsercion3')";
    $sqlSelect = "SELECT * FROM coches WHERE mar_coc LIKE '%$textoConsulta1%' OR mod_coc LIKE '%$textoConsulta1%' OR aut_coc LIKE '%$textoConsulta1%' ORDER BY mar_coc, mod_coc, aut_coc";

    // Ejecutar la inserción
    $oData->insertGetData1($sqlInsert);
    // Ejecutar la selección
    $data = $oData->insertGetData1($sqlSelect);

    // Volcado de la consulta
    if (empty($data)) 
    {
        echo "<div class='bloque1 negrita'>No hay datos</div>";
    } 
    else 
    {
        echo "<div class='bloque1 negrita'>
                <div class='bloque1'>Marca</div>
                <div class='bloque1'>Modelo</div>
                <div class='bloque1'>Autonomía</div>
            </div>";

        foreach ($data as $row) 
        {
            echo "<div class='bloque0'>    
                    <div class='bloque1'>$row->mar_coc</div>
                    <div class='bloque1'>$row->mod_coc</div>
                    <div class='bloque1'>$row->aut_coc</div>
                </div>";
        }
    }
?>