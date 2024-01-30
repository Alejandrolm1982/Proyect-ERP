<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Almacen</title>
</head>
<body>
<!--Menu desplegable-->
<label for="btn-menu" class="menuEstetica">Menu</label>
            <input type="checkbox" id="btn-menu">
            <div class="container-menu">
            <nav class="vertical-nav cont-menu">
                <ul>
                    <li><a href="./Home.php">Inicio</a></li>
                    <li><a href="./Usuario.php">Usuario</a></li>
                    <li><a href="./Clienteproveedor.php">Cliente<br>Proveedor</a></li>
                    <li><a href="./Facturacion.php">Facturacion</a></li>
                    <li><a href="./Producto.php">Producto</a></li>
                </ul>
                <label for="btn-menu">✖️</label>
            </nav>
            </div>          
        <!--Fin Menu desplegable-->


        <select id="almacen" name="almacen" class="select">
        <option ></option>
        <option value="almacen">Almacen</option>
    </select>
    <button id="aniadir" class="boton" onclick="toggleFormulario()">Añadir</button>
    <div id="container2" style="display: none;">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioAgregar3" class="formulario">

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="formulario-campo" placeholder="Fecha" >
            
            <label for="capacidad">Capacidad:</label>
            <input type="text" id="capacidad" name="capacidad" class="formulario-campo" placeholder="capacidad" required>

            <label for="ubicacion">Ubicacion:</label>
            <input type="text" id="ubicacion" name="ubicacion" class="formulario-campo" placeholder="ubicacion" required>

            <input type="submit" id="confirmar3" name="confirmar3" value="confirmar" class="formulario-boton boton">
        </form>
    </div>
    <div id="container3"></div>
    <div id="container1"></div><!--AQUI TIENE QUE CARGARSE LA PRIMERA CONSULTA DE LA TABLA cliente/proveedor-->

</body>
</html>
