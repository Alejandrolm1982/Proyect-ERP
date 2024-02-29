<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
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



<select id="facturacion" name="facturacion" class="select">
    <option value=""></option>
    <option value="facturacion">Facturación</option>
</select>
<button id="aniadir" class="boton" onclick="toggleFormulario()">Añadir</button>
<div id="container2" style="display: none;">
<!-- FORMULARIO DE AÑADIR -->
<form id="formularioAgregar4" class="formulario">

    <label for="tipoTransaccion">Tipo de Transacción:</label>
    <select id="tipoTransaccion" name="tipoTransaccion" class="select" >
        <option value="compra">Compra</option>
        <option value="venta">Venta</option>
    </select>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" class="formulario-campo" placeholder="Fecha" >

    <label for="factura">factura:</label>
    <input type="text" id="factura" name="factura" class="formulario-campo" placeholder="factura" required>

    <label for="albaran">Albarán:</label>
    <input type="text" id="albaran" name="albaran" class="formulario-campo" placeholder="albaran" required>

    <input type="submit" id="confirmar4" name="confirmar4" value="confirmar" class="formulario-boton boton">
</form>
</div>
<form id="formularioBusqueda3" class="formulario">
        <input type="text" id="textoBusqueda3" name="textoBusqueda3">
        <input type="submit" id="confirmarBusqueda3" name="confirmarBusqueda3" value="Buscar" class="formulario-boton boton">
    </form>
<div id="container3"></div>
<div id="container1"></div><!--AQUI TIENE QUE CARGARSE LA PRIMERA CONSULTA DE LA TABLA cliente/proveedor-->

</body>
</html>