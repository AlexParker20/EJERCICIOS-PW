<html>
<head>
    <title>Formulario de Usuario y Clave</title>
</head>
<body>
    <h1>Formulario de Ingreso de Usuario y Claves</h1>

    <!-- Formulario para ingresar el nombre de usuario y las claves -->
    <form action="PRACTICA19.php" method="post">
        Nombre de usuario: <input type="text" name="username" required><br><br>
        Clave: <input type="password" name="clave1" required><br><br>
        Repetir Clave: <input type="password" name="clave2" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Función para verificar si las claves ingresadas son distintas
    function verificar_claves($clave1, $clave2) {
        if ($clave1 != $clave2) {
            echo "<p style='color: red;'>Las claves ingresadas son diferentes. Por favor, inténtelo nuevamente.</p>";
        } else {
            echo "<p>Las claves coinciden. ¡Usuario registrado correctamente!</p>";
        }
    }

    // Verificar si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];

        // Llamar a la función para verificar las claves
        verificar_claves($clave1, $clave2);
    }
    ?>
</body>
</html>
