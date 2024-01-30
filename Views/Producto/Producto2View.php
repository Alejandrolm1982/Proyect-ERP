<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion y Eliminacion de Productos</title>
</head>
<body>
    <?php require_once "Controllers/Producto4Controller.php"; ?>
    <div id="container2">
        <!-- FORMULARIO DE AÑADIR -->
        <form id="formularioEdicion2" class="formulario">
            <input type="hidden" id="id_producto" name="id_producto" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_producto']; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="formulario-campo" placeholder="Nombre" value="<?php echo $nombre; ?>" required>

            <label for="stock">Stock:</label>
            <input type="text" id="stock" name="stock" class="formulario-campo" placeholder="stock" value="<?php echo $stock; ?>" required>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" class="formulario-campo" placeholder="precio" value="<?php echo $precio; ?>" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" class="formulario-campo" placeholder="descripcion" value="<?php echo $descripcion; ?>" required>

            <input type="submit" id="confirmarEdicion2" name="confirmarEdicion2" value="confirmarEdicion" class="formulario-boton boton">
        </form>
    </div>
    <form id="formEliminacion2" class="bloque1">
        <input type="hidden" id="textoEliminacion0" name="textoEliminacion0" required class="campo1" placeholder="Identificador" value="<?php echo $_GET['id_producto']; ?>">
        <input type="submit" id="botonEliminacion2" name="botonEliminacion1" value="Eliminar" class="boton">
    </form>
    <div id="container3"></div>
</body>
</html>
