<?php

    // Recibe los datos del formulario
    $nombre = empty($_POST['nombre']) ? '' : $_POST['nombre'];
    $correo = empty($_POST['correo']) ? '' : $_POST['correo'];
    $contrasena = empty($_POST['contrasena']) ? '' : $_POST['contrasena'];
    $contrato = empty($_POST['contrato']) ? '' : $_POST['contrato'];
    $telefono = empty($_POST['telefono']) ? '' : $_POST['telefono'];
    $horario = empty($_POST['horario']) ? '' : $_POST['horario'];
    $salario = empty($_POST['salario']) ? '' : $_POST['salario'];


    // Llamada a la conexión
    require_once "../Db/Con1Db.php";
    // Llamada a al modelo
    require_once "../Models/Insert1Model.php";

    // Instanciación del objeto
    $oData = new Datos;
    // Llamada al método
    $sql = "INSERT INTO usuario (salario, horario, contrato,nombre,correo,contraseña,Telefono)
    VALUES (?, ?, ?, ?, ?, ?, ?)";
    $data = $oData->setDataPreparedStatements1($sql, $salario, $horario, $contrato,$nombre,$correo,$contrasena,$telefono);
    
    // Devolución del resultado obtenido
    echo $data;

    // Documentación en:
    // https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements
?>