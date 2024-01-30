<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion y Eliminacion de Clientes/Proveedores</title>
</head>
<body>
<?php require_once "Controllers/ClienteProveedor4Controller.php"; ?>
    <div id="container2">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioEdicion" class="formulario">
            <input type="hidden" id="id_cliente_proveedor" name="id_cliente_proveedor" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_cliente_proveedor']; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="formulario-campo" placeholder="Nombre" value="<?php echo $nombre; ?>" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="formulario-campo" placeholder="Apellidos" value="<?php echo $apellidos; ?>">

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="formulario-campo" placeholder="Teléfono" value="<?php echo $telefono; ?>" required>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" class="formulario-campo" placeholder="Correo" value="<?php echo $correo; ?>" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" class="formulario-campo" placeholder="Dirección" value="<?php echo $direccion; ?>" required>

            <label for="metodoPago">Método de Pago:</label>
            <select id="metodoPago" name="metodoPago" class="select" value="<?php echo $metodoPago; ?>">
                <option value="metalico">Metálico</option>
                <option value="tarjeta">Tarjeta</option>
            </select>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="formulario-campo" placeholder="Fecha" value="<?php echo $fecha; ?>">

            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" class="select" value="<?php echo $tipo; ?>" required>
                <option value="cliente">Cliente</option>
                <option value="proveedor">Proveedor</option>
            </select>

            <input type="submit" id="confirmarEdicion" name="confirmarEdicion" value="confirmarEdicion" class="formulario-boton boton">
        </form>
    </div>
    <form id="formEliminacion1" class="bloque1">
        <input type="hidden" id="textoEliminacion0" name="textoEliminacion0" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_cliente_proveedor']; ?>">
        <input type="submit" id="botonEliminacion1" name="botonEliminacion1" value="Eliminar" class="boton">
    </form>
    <div id="container3"></div>
</body>
</html>