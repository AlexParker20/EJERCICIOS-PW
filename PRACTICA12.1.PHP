<html>
<head>
    <title>Resultado de Deportes</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    // Verificar si se ha enviado el formulario y si se han seleccionado deportes
    if (isset($_POST['name']) && isset($_POST['sports'])) {
        $name = $_POST['name'];
        $sports = $_POST['sports'];

        // Mostrar el nombre y la cantidad de deportes seleccionados
        echo "<p>Hola <b>$name</b>, has seleccionado los siguientes deportes:</p>";
        echo "<ul>";
        foreach ($sports as $sport) {
            echo "<li>$sport</li>";
        }
        echo "</ul>";
        echo "<p>En total, practicas " . count($sports) . " deporte(s).</p>";
    } else {
        echo "<p>Por favor, ingresa tu nombre y selecciona al menos un deporte.</p>";
    }
    ?>
</body>
</html>
