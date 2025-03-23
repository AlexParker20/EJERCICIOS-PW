<html>
<head>
    <title>Resultado de Ingresos</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    // Verificar si se ha enviado el formulario
    if (isset($_POST['name']) && isset($_POST['income'])) {
        $name = $_POST['name'];
        $income = $_POST['income'];

        // Mostrar el nombre y el rango de ingresos
        echo "<p>Hola <b>$name</b>, seleccionaste el rango de ingresos: <b>$income</b>.</p>";

        // Verificar si la persona debe pagar impuestos
        if ($income == '>3000') {
            echo "<p>Debes pagar impuestos a las ganancias.</p>";
        } else {
            echo "<p>No debes pagar impuestos a las ganancias.</p>";
        }
    } else {
        echo "<p>Por favor, ingresa tu nombre y selecciona tu rango de ingresos.</p>";
    }
    ?>
</body>
</html>
