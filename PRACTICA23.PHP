<html>
<head>
    <title>Baja de un Curso</title>
</head>
<body>
    <h1>Baja de un Curso</h1>

    <!-- Formulario para ingresar el nombre del curso -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombreCurso">Nombre del Curso:</label>
        <input type="text" id="nombreCurso" name="nombreCurso" required><br><br>
        <input type="submit" value="Eliminar Curso">
    </form>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el nombre del curso ingresado
        $nombreCurso = $_POST['nombreCurso'];

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

        // Consulta para verificar si el curso existe
        $sql = "SELECT * FROM cursos WHERE nombrecur = '$nombreCurso'";
        $result = $conn->query($sql);

        // Verificar si el curso existe
        if ($result->num_rows > 0) {
            // Si el curso existe, proceder a eliminarlo
            $deleteSQL = "DELETE FROM cursos WHERE nombrecur = '$nombreCurso'";

            if ($conn->query($deleteSQL) === TRUE) {
                echo "<p>El curso '$nombreCurso' ha sido eliminado exitosamente.</p>";
            } else {
                echo "<p>Error al eliminar el curso: " . $conn->error . "</p>";
            }
        } else {
            echo "<p>No se encontró el curso '$nombreCurso'.</p>";
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

</body>
</html>
