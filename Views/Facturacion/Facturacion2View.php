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

            <input type="submit" id="confirmarEdicion4" name="confirmarEdicion4" value="confirmar" class="formulario-boton boton">
        </form>
    </div>
    <form id="formEliminacion4" class="bloque1">
        <input type="hidden" id="textoEliminacion0" name="textoEliminacion0" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_facturacion']; ?>">
        <input type="submit" id="botonEliminacion4" name="botonEliminacion4" value="Eliminar" class="boton">
    </form>
    <form id="formDocumento" class="bloque1">
        <input type="hidden" id="id_documento" name="id_documento" required class="campo1" placeholder="Identificador" value="<?php session_start(); echo $_SESSION['id_documento'] = $_GET['id_documento']; ?>">
    </form>
    <div id="containerDocumento"></div>
</body>
</html>