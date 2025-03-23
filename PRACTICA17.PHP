<html>
<head>
    <title>Ver Pedidos de Pizzas</title>
</head>
<body>
    <h1>Pedidos de Pizzas Realizados</h1>

    <?php
    // Verificar si el archivo existe antes de intentar abrirlo
    $file = "datos.txt";

    if (file_exists($file)) {
        // Abrir el archivo para lectura
        $fp = fopen($file, "r");

        if ($fp) {
            echo "<h3>Lista de Pedidos:</h3>";
            echo "<pre>";  // Etiqueta para mantener el formato del archivo (saltos de línea, espacios)
            while (!feof($fp)) {
                // Leer línea por línea y mostrar el contenido
                $line = fgets($fp);
                echo $line;
            }
            echo "</pre>";

            // Cerrar el archivo
            fclose($fp);
        } else {
            echo "<p>No se pudo abrir el archivo.</p>";
        }
    } else {
        echo "<p>No se ha realizado ningún pedido aún.</p>";
    }
    ?>

</body>
</html>
