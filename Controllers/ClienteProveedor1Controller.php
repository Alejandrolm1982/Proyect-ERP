<?php
  
  if(file_exists("../Db/Con1Db.php"))
  {
      // Llamada a la conexión
      require_once '../Db/Con1Db.php';
      //Llamada al modelo
      require_once '../Models/ClienteProveedor1Model.php';

  }
  else if(file_exists("Db/Con1Db.php"))
  {
       // Llamada a la conexión
      require_once 'Db/Con1Db.php';
      //Llamada al modelo
      require_once 'Models/ClienteProveedor1Model.php';

  }

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from clienteproveedor";
    $data = $oData->getData1($sql);

    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos.
            </div>
        ";
    }
    else
    {
        echo
        "
        <div class='bloque0 negrita'>
            <div class='bloque1'>NOMBRE</div>
            <div class='bloque1'>DIRECCION</div>
            <div class='bloque1'>TELÉFONO</div>
            <div class='bloque1'>CORREO</div>
            <div class='bloque1'>TIPO</div>
        </div>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <div class='bloque0'>
                <div class='bloque1'>$row->nombre</div>
                <div class='bloque1'>$row->direccion</div>
                <div class='bloque1'>$row->telefono</div>
                <div class='bloque1'>$row->correo</div>
                <div class='bloque1'>$row->tipo</div>
            </div>
            ";
        }
    }

?>