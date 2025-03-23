<html>
<head>
    <title>Consulta de Alumno</title>
</head>
<body>
    <h1>Consulta de Alumno</h1>

    <!-- Formulario para ingresar el nombre del alumno -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <input type="submit" value="Buscar Alumno">
    </form>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el nombre ingresado
        $nombre = $_POST['nombre'];

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

        // Consulta para recuperar los datos del alumno
        $sql = "SELECT codigo, nombre, apellido, email FROM alumnos WHERE nombre LIKE '%$nombre%'";
        $result = $conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            // Mostrar los datos en una tabla
            echo "<h2>Datos del Alumno</h2>";
            echo "<table border='1'><tr><th>Código</th><th>Nombre</th><th>Apellido</th><th>Email</th></tr>";
            // Mostrar los datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["email"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron alumnos con ese nombre.";
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

</body>
</html>
