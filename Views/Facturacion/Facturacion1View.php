
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
    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php session_start(); echo $_SESSION['id_usuario']; ?>">

    <label for="nombre">Cliente/Proveedor:</label>
    <input type="text" id="nombre" name="nombre" class="formulario-campo" placeholder="nombre" >

    <label for="tipoTransaccion">Tipo de Transacción:</label>
    <select id="tipoTransaccion" name="tipoTransaccion" class="select" >
        <option value="compra">Compra</option>
        <option value="venta">Venta</option>
    </select>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" class="formulario-campo" placeholder="Fecha" >

    <label for="num_pedido">Número pedido:</label>
    <input type="text" id="num_pedido" name="num_pedido" class="formulario-campo" placeholder="" >

    <label for="vencimiento">Vencimiento:</label>
    <input type="date" id="date" name="vencimiento" class="formulario-campo" placeholder="vencimiento" >

    <label for="nif">Nif:</label>
    <input type="text" id="nif" name="nif" class="formulario-campo" placeholder="nif" >

    <input type="submit" id="confirmar4" name="confirmar4" value="confirmar" class="formulario-boton boton">
</form>
</div>
<div id="container3"></div>
<div id="container1"></div><!--AQUI TIENE QUE CARGARSE LA PRIMERA CONSULTA DE LA TABLA cliente/proveedor-->

</body>
</html>