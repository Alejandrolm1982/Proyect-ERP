<?php 

    class Datos
    {

        private $mysqli;
        private $data;

        public function __construct()
        {
            $this->mysqli = Connection::conn1();
            $this->data = array();
        }

        public function uploadFile($nombreFichero1, $ficheroInsercion1, $rutaFichero1)
        {
            $extensionFichero = pathinfo($_FILES[$nombreFichero1]['name'], PATHINFO_EXTENSION);
            $rutaNombreFichero1 = $rutaFichero1 . $nombreFichero1 . '.' . $extensionFichero;
            $rutaNombreFicheroBaseDeDatos1 = $rutaFichero1 . $nombreFichero1 . '.' . $extensionFichero1;

            // Subida del fichero
            if(move_uploaded_file($_FILES[$nombreFichero1]['tmp_name'], $rutaNombreFichero1))
            {
                echo 'Fichero Subido correctamente (servidor)';
                // INICIO - Captura de los datos extras enviados junto con el fichero
                // echo $_POST['descripcion1'];
                // echo $_POST['InformacionAdicional1'];
                // FIN - Captura de los datos extras enviados junto con el fichero
                return $rutaNombreFicheroBaseDeDatos1;
            }
            else
            {
                switch ($_FILES['ficheroInsercion1']['error'])
                {
                    case UPLOAD_ERR_OK: /* UPLOAD_ERR_OK: Archivo subido correctamente */
                    break;
                    case UPLOAD_ERR_INI_SIZE:
                    echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
                    break;
                    case UPLOAD_ERR_FORM_SIZE:
                    echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
                    break;      
                    case UPLOAD_ERR_PARTIAL:
                    echo 'El fichero fue sólo parcialmente subido.';
                    break;
                    case UPLOAD_ERR_NO_FILE:
                    echo 'No se subió ningún fichero.';
                    break;
                    case UPLOAD_ERR_NO_TMP_DIR:
                    echo 'Falta la carpeta temporal.';
                    break;
                    case UPLOAD_ERR_CANT_WRITE:
                    echo 'No se pudo escribir el fichero en el disco.';
                    break;
                    case UPLOAD_ERR_EXTENSION:
                    echo 'Una extensión de PHP detuvo la subida de ficheros.';
                    break;          
                    default:
                    echo 'El archivo no se ha enviado.';
                    break;
                }
            }


        }


        // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
        public function setDataPreparedStatements1($sql, $par1, $par2, $par3, $par4)
        {
            $stmt = $this->mysqli->prepare($sql);
            $stmt -> bind_param("ssis", $par1, $par2, $par3, $par4);
            //el ssi significa que le paso dos strings y un int
            // i int
            // d float
            // s string
            // b blob

            if(!$stmt->execute())
            {
                $result = "La operación no se ha podido realizar.";
                // echo "Detalle del error en la consulta (setDataPreparedStatements1) - ";
                // echo "Número de error: " . $this->mysqli->errno . " - ";
                // echo "Descripción del error: " . $this->mysqli->error;
            }
            else
            {
                $result = "Operación realizada con exito";
            }

            $this->mysqli->close();
            return $result;
        }

    }

?>