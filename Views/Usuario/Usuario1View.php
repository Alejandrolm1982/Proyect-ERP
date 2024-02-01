<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/style.css">
    <title>Usuario</title>
</head>
<body>

        <!--Menu desplegable-->
            <label for="btn-menu" class="menuEstetica">Menu</label>
            <input type="checkbox" id="btn-menu">
            <div class="container-menu">
            <nav class="vertical-nav cont-menu">
                <ul>
                    <li><a href="./Home.php">Inicio</a></li>
                    <li><a href="./Clienteproveedor.php">Cliente<br>Proveedor</a></li>
                    <li><a href="./Almacen.php">Almacen</a></li>
                    <li><a href="./Facturacion.php">Facturacion</a></li>
                    <li><a href="./Producto.php">Producto</a></li>
                </ul>
                <label for="btn-menu">✖️</label>
            </nav>
            
            </div>          
        <!--Fin Menu desplegable-->

    <section  class="user-info">
                <h4>Datos del Usuario</h4>
                <ul>
                    <li id="Nombre">Nombre:</li>
                    <li id="NombreUsuario">Usuario:</li>
                    <li id="Horario">Horario:</li>
                    <li id="Contrato">Tipo de Contrato:</li>
                </ul>
                <button type="button" id="CambioContraseña" class="button1">Cambiar Contraseña</button>
    </section>
    <section>
        <button type="button" id="registrar" class="boton"><a href="./Insert.php">Registrar</a></button>
    </section>

</body>
</html>
