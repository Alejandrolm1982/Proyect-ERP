<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente/Proveedor</title>
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
                    <li><a href="./Almacen.php">Almacen</a></li>
                    <li><a href="./Facturacion.php">Facturacion</a></li>
                    <li><a href="./Producto.php">Producto</a></li>
                </ul>
                <label for="btn-menu">✖️</label>
            </nav>
            </div>          
        <!--Fin Menu desplegable-->

    <label>Selecciona Cliente/Proveedor:</label>
    <select id="cliente/proveedor" name="cliente/proveedor" class="select">
        <option ></option>
        <option value="todos">Todos</option>
        <option value="cliente">Cliente</option>
        <option value="proveedor">Proveedor</option>
    </select>
    <button id="aniadir" class="boton" onclick="toggleFormulario()">Añadir</button>
    <div id="container2" style="display: none;">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioAgregar" class="formulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="formulario-campo" placeholder="Nombre" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="formulario-campo" placeholder="Apellidos">

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="formulario-campo" placeholder="Teléfono" required>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" class="formulario-campo" placeholder="Correo" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" class="formulario-campo" placeholder="Dirección" required>

            <label for="metodoPago">Método de Pago:</label>
            <select id="metodoPago" name="metodoPago" class="select" >
                <option value="metalico">Metálico</option>
                <option value="tarjeta">Tarjeta</option>
            </select>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="formulario-campo" placeholder="Fecha" >

            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" class="select" required>
                <option value="cliente">Cliente</option>
                <option value="proveedor">Proveedor</option>
            </select>

            <input type="submit" id="confirmar" name="confirmar" value="confirmar" class="formulario-boton">
        </form>
    </div>
    <div id="container3"></div>
    <div id="container1"></div><!--AQUI TIENE QUE CARGARSE LA PRIMERA CONSULTA DE LA TABLA cliente/proveedor-->

</body>
</html>