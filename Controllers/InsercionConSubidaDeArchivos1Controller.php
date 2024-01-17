<?php

    if(file_exists("../Db/Con1Db.php"))
    {
        // Llamada a la conexión
        require_once '../Db/Con1Db.php';
        //Llamada al modelo
        require_once '../Models/InsercionConSubidaDeArchivos1Model.php';

    }
    else if(file_exists("Db/Con1Db.php"))
    {
         // Llamada a la conexión
        require_once 'Db/Con1Db.php';
        //Llamada al modelo
        require_once 'Models/InsercionConSubidaDeArchivos1Model.php';

    }

    // Tratamiento de los input type='text'
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    $textoInsercion2 = empty($_POST['textoInsercion2']) ? '' : $_POST['textoInsercion2'];
    $textoInsercion3 = empty($_POST['textoInsercion3']) ? '' : $_POST['textoInsercion3'];
    $ficheroInsercion1 = empty($_FILES['ficheroInsercion1']['name']) ? '' : $_FILES['ficheroInsercion1']['name'];

    // Crear la ruta del archivo
    $rutaFichero1 = "../Assets/img/";
    $nombreFichero1 = $textoInsercion1 . ' ' . $textoInsercion2;

    //Llamada al metodo para subir el fichero que devuelve la ruta completa en la que se encuentra el fichero(url)
    //Parametro 1: Nombre del fichero que se va a subir
    //Parametro 2 : Nombre del control file que selecciona el fichero
    //Parametro 3: Ruta del fichero en la que se va a almacenar el fichero
    $rutaNombreFicheroBaseDatos1 = $oData->uploadFile($nombreFichero1, $ficheroInsercion1, $rutaFichero1);

    //Eliminacion de los tres caracteres "../" en la rua en la que se encuentra el fichero
    $rutaNombreFicheroBaseDatos1 = substr($rutaNombreFicheroBaseDatos1, 3);

    // Instanciación del objeto
    $oData = new Datos;
    
    // Llamada al método (Aquí ya estamos empezando el STATEMENT)
    $sql = "INSERT INTO COCHES (mar_coc, mod_coc, aut_coc, rut_coc) VALUES (?,?,?,?)";

    $data = $oData->setDataPreparedStatements1($sql, $textoInsercion1, $textoInsercion2, $textoInsercion3, $ficheroInsercion1);

    // Devolución del resultado obtenido
    echo $data;


?>