<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente/Proveedor</title>
</head>
<body>

    <nav class="vertical-nav">
        <ul>
            <li><a href="./Usuario.php">Usuario</a></li>
            <li><a href="./Home.php">Inicio</a></li>
            <li><a href="./Almacen.php">Almacen</a></li>
            <li><a href="./Facturacion.php">Facturacion</a></li>
            <li><a href="./Producto.php">Producto</a></li>
        </ul>
    </nav>

    <label>Selecciona Cliente/Proveedor:</label>
    <select id="cliente/proveedor" name="cliente/proveedor" class="select">
        <option ></option>
        <option value="todos">Todos</option>
        <option value="cliente">Cliente</option>
        <option value="proveedor">Proveedor</option>
    </select>
    <button id="aniadir" class="boton" onclick="mostrarFormulario()">Añadir</button>
    <button id="editar" class="boton">Editar</button>
    <button id="eliminar" class="boton">Eliminar</button>
    <div id="container1"><!--AQUI TIENE QUE CARGARSE LA PRIMERA CONSULTA DE LA TABLA cliente/proveedor-->

    </div>
    <div id="container2" style="display: none;">
    <!-- FORMULARIO DE AÑADIR -->
    <form id="formularioAgregar">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos">

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="metodoPago">Método de Pago:</label>
        <select id="metodoPago" name="metodoPago" required>
            <option value="metalico">Metálico</option>
            <option value="tarjeta">Tarjeta</option>
        </select>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <button type="button" onclick="confirmarAccion()">Confirmar</button>
    </form>
</div>
</body>
</html>