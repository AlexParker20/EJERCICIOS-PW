<html>
<head>
    <title>Baja de Todos los Cursos</title>
</head>
<body>
    <h1>Baja de Todos los Cursos</h1>

    <!-- Botón para eliminar todos los registros -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Eliminar Todos los Cursos">
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

        // Consulta SQL para eliminar todos los registros de la tabla cursos
        $sql = "DELETE FROM cursos";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "<p>Todos los cursos han sido eliminados exitosamente.</p>";
        } else {
            echo "<p>Error al eliminar los cursos: " . $conn->error . "</p>";
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

</body>
</html>
