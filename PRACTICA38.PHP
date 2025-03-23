<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de clave</title>
</head>
<body>

    <h2>Formulario de Ingreso</h2>

    <?php
    // Verificar si hay un parámetro de error
    if (isset($_REQUEST['error']) && $_REQUEST['error'] == 1) {
        echo "<p style='color: red;'>Ingreso clave incorrecta. Intenta de nuevo.</p>";
    }
    ?>

    <form action="pagina2.php" method="POST">
        <label for="direccion">Ingrese la clave:</label>
        <input type="text" id="direccion" name="direccion" required>
        <input type="submit" value="Ingresar">
    </form>

</body>
</html>
