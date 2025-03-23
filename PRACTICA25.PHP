<html>
<head>
    <title>Modificar Curso</title>
</head>
<body>
    <h1>Modificar Curso</h1>

    <!-- Formulario para ingresar el código del curso y el nuevo nombre -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="codigo">Código del Curso:</label>
        <input type="number" id="codigo" name="codigo" required><br><br>

        <label for="nuevo_nombre">Nuevo Nombre del Curso:</label>
        <input type="text" id="nuevo_nombre" name="nuevo_nombre" required><br><br>

        <input type="submit" value="Modificar Curso">
    </form>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Datos de conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "PHPFACIL";

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Obtener los valores del formulario
        $codigo = $_POST['codigo'];
        $nuevo_nombre = $_POST['nuevo_nombre'];

        // Consulta SQL para actualizar el nombre del curso con el código proporcionado
        $sql = "UPDATE cursos SET nombrecur = ? WHERE codigo = ?";

        // Preparar la consulta para evitar inyecciones SQL
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("si", $nuevo_nombre, $codigo); // "si" indica que el primer parámetro es string y el segundo es integer

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "<p>El nombre del curso ha sido modificado exitosamente.</p>";
            } else {
                echo "<p>Error al modificar el curso: " . $conn->error . "</p>";
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            echo "<p>Error en la preparación de la consulta.</p>";
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

</body>
</html>
