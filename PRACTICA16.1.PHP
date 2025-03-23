<html>
<head>
    <title>Confirmación del Pedido</title>
</head>
<body>
    <h1>Pedido Confirmado</h1>

    <?php
    // Verificar que se han enviado los datos del formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $pizzas = isset($_POST['pizzas']) ? $_POST['pizzas'] : array();
        $cantidad_jamon = $_POST['cantidad_jamon'];
        $cantidad_napolitana = $_POST['cantidad_napolitana'];
        $cantidad_mozzarella = $_POST['cantidad_mozzarella'];

        // Mostrar el resumen del pedido
        echo "<h3>Resumen del Pedido:</h3>";
        echo "Nombre: <b>$nombre</b><br>";
        echo "Dirección: <b>$direccion</b><br><br>";

        echo "Tipo de Pizza y Cantidad:<br>";

        // Mostrar las pizzas seleccionadas
        if (in_array('Jamon y Queso', $pizzas)) {
            echo "Jamon y Queso: $cantidad_jamon<br>";
        }
        if (in_array('Napolitana', $pizzas)) {
            echo "Napolitana: $cantidad_napolitana<br>";
        }
        if (in_array('Mozzarella', $pizzas)) {
            echo "Mozzarella: $cantidad_mozzarella<br>";
        }

        // Preparar el texto a guardar en el archivo
        $pedido = "Nombre: $nombre\n";
        $pedido .= "Dirección: $direccion\n";
        foreach ($pizzas as $pizza) {
            if ($pizza == 'Jamon y Queso') {
                $pedido .= "Jamon y Queso: $cantidad_jamon\n";
            } elseif ($pizza == 'Napolitana') {
                $pedido .= "Napolitana: $cantidad_napolitana\n";
            } elseif ($pizza == 'Mozzarella') {
                $pedido .= "Mozzarella: $cantidad_mozzarella\n";
            }
        }
        $pedido .= str_repeat("-", 50) . "\n";

        // Guardar el pedido en el archivo "datos.txt"
        $file = fopen("datos.txt", "a");  // Abrir archivo en modo de adición
        fwrite($file, $pedido);  // Escribir el pedido en el archivo
        fclose($file);  // Cerrar el archivo

        echo "<p>Tu pedido ha sido recibido y guardado exitosamente.</p>";
    } else {
        echo "<p>Por favor, realiza un pedido antes de confirmar.</p>";
    }
    ?>
</body>
</html>
