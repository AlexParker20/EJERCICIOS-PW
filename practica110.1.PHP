<html>
<head>
    <title>Resultado de Edad</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    // Verificar si se recibió el formulario
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        // Verificar si la persona es mayor de edad
        if ($age >= 18) {
            echo "<p>Hola <b>$name</b>, eres mayor de edad.</p>";
        } else {
            echo "<p>Hola <b>$name</b>, eres menor de edad.</p>";
        }
    } else {
        echo "<p>Por favor, ingresa tu nombre y edad.</p>";
    }
    ?>
</body>
</html>
