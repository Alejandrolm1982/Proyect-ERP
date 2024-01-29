<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente/Proveedor</title>
    <link rel="stylesheet" href="style.css">
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
            </nav>
            </div>          
        <!--Fin Menu desplegable-->

    <label>Selecciona Cliente/Proveedor:</label>
    <select id="cliente/proveedor" name="cliente/proveedor" class="select">
        <option value="todos">Todos</option>
        <option value="cliente">Cliente</option>
        <option value="proveedor">Proveedor</option>
    </select>
    <button id="aniadir" class="boton ">Añadir</button>
    <button id="editar" class="boton">Editar</button>
    <button id="eliminar" class="boton">Eliminar</button>
    <div id="container1"><!--AQUI TIENE QUE METERSE LA PRIMERA CONSULTA DE LA TABLA FACTURACION-->

    </div>
</body>
</html>