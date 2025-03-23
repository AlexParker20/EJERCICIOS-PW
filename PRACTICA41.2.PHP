<!-- 41.2.php -->
<html>
<head>
    <title>Ver Quejas Registradas</title>
</head>
<body>
    <h2>Quejas Registradas</h2>
    <?php
    // Verificar si el archivo de quejas existe
    if (file_exists("datos.txt")) {
        // Leer el contenido del archivo
        $contenido = file_get_contents("datos.txt");
        echo nl2br($contenido);  // Imprimir las quejas con saltos de línea
    } else {
        echo "No hay quejas registradas aún.";
    }
    ?>
    <br><br>
    <a href="41.php">Volver al formulario</a>
</body>
</html>
