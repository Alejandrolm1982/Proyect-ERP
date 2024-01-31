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
        <h1>Crear Nuevo Usuario</h1>
        <button id="aniadir" class="boton" onclick="toggleFormulario()">Añadir</button>
    <div id="container2" style="display: none;">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioAgregarUsuario" class="formulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="formulario-campo" placeholder="Nombre" required>

            <label for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" class="formulario-campo" placeholder="correo" required>

            <label for="contrasena">Contraseña:</label>
            <input type="text" id="contrasena" name="contrasena" class="formulario-campo" placeholder="contrasena" required>

            <label for="contrato">Contrato:</label>
            <input type="text" id="contrato" name="contrato" class="formulario-campo" placeholder="contrato" required>

            <label for="telefono">telefono:</label>
            <input type="text" id="telefono" name="telefono" class="formulario-campo" placeholder="telefono" required>

            <label for="horario">horario:</label>
            <input type="text" id="horario" name="horario" class="formulario-campo" placeholder="horario" required>

            <label for="salario">salario:</label>
            <input type="text" id="salario" name="salario" class="formulario-campo" placeholder="salario" required>

            <input type="submit" id="confirmarUsuario" name="confirmarUsuario" value="confirmar" class="formulario-boton boton">
        </form>
    </div>
    

</body>
</html>