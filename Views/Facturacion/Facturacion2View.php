<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion y Eliminacion de Facturaciones</title>
</head>
<body>
<?php require_once "Controllers/Facturacion4Controller.php"; ?>
    <div id="container2">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioEdicion4" class="formulario">
            <input type="hidden" id="id_facturacion" name="id_facturacion" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_facturacion']; ?>">

            <label for="tipoTransaccion">Tipo de Transacción:</label>
            <select id="tipoTransaccion" name="tipoTransaccion" class="select" value="<?php echo $tipoTransaccion; ?>" >
                <option value="compra">Compra</option>
                <option value="venta">Venta</option>
            </select>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="formulario-campo" placeholder="Fecha" value="<?php echo $fecha; ?>">

            <label for="factura">factura:</label>
            <input type="text" id="factura" name="factura" class="formulario-campo" placeholder="factura" value="<?php echo $factura; ?>" required>

            <label for="albaran">Albarán:</label>
            <input type="text" id="albaran" name="albaran" class="formulario-campo" placeholder="albaran" value="<?php echo $albaran; ?>" required>

            <input type="submit" id="confirmarEdicion4" name="confirmarEdicion4" value="confirmar" class="formulario-boton boton">
        </form>
    </div>
    <form id="formEliminacion4" class="bloque1">
        <input type="hidden" id="textoEliminacion0" name="textoEliminacion0" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_facturacion']; ?>">
        <input type="submit" id="botonEliminacion4" name="botonEliminacion4" value="Eliminar" class="boton">
    </form>
    <div id="container3"></div>
</body>
</html>