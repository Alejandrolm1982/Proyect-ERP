<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
                    <li><a href="./Almacen.php">Almacen</a></li>
                    <li><a href="./Producto.php">Producto</a></li>
                </ul>
                <label for="btn-menu">✖️</label>
            </nav>
            </div>          
        <!--Fin Menu desplegable-->


    <select id="producto" name="producto" class="select">
        <option value=""></option>
        <option value="producto">producto</option>
    </select>
    <button id="aniadir" class="boton" onclick="toggleFormulario()">Añadir</button>
    <div id="container2" style="display: none;">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioAgregar2" class="formulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="formulario-campo" placeholder="Nombre" required>

            <label for="stock">Stock:</label>
            <input type="text" id="stock" name="stock" class="formulario-campo" placeholder="stock" required>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" class="formulario-campo" placeholder="precio" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" class="formulario-campo" placeholder="descripcion" required>

            <input type="submit" id="confirmar2" name="confirmar2" value="confirmar" class="formulario-boton boton">
        </form>
    </div>
    <div id="container3"></div>
    <div id="container1"></div><!--AQUI TIENE QUE CARGARSE LA PRIMERA CONSULTA DE LA TABLA cliente/proveedor-->

</body>
</html>