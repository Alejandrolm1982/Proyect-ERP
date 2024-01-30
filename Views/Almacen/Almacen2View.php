<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion almacen</title>
</head>
<body>
    <?php require_once "Controllers/Almacen4Controller.php"; ?>
    <div id="container2">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioEdicion3" class="formulario">
            <input type="hidden" id="id_almacen" name="id_almacen" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_almacen']; ?>">

            <label for="fecha">fecha:</label>
            <input type="text" id="fecha" name="fecha" class="formulario-campo" placeholder="fecha" value="<?php echo $fecha; ?>" required>

            <label for="capacidad">capacidad:</label>
            <input type="text" id="capacidad" name="capacidad" class="formulario-campo" placeholder="capacidad" value="<?php echo $capacidad; ?>" required>

            <label for="Ubicacion">Ubicacion:</label>
            <input type="text" id="Ubicacion" name="Ubicacion" class="formulario-campo" placeholder="Ubicacion" value="<?php echo $Ubicacion; ?>" required>

            <input type="submit" id="confirmarEdicion3" name="confirmarEdicion2" value="confirmarEdicion" class="formulario-boton boton">
        </form>
    </div>
    <form id="formEliminacion3" class="bloque1">
        <input type="hidden" id="textoEliminacion0" name="textoEliminacion0" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_almacen']; ?>">
        <input type="submit" id="botonEliminacion3" name="botonEliminacion3" value="Eliminar" class="boton">
    </form>
    <div id="container3"></div>
</body>
</html>