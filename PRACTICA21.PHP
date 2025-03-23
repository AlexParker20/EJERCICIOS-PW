<html>
<head>
    <title>Listado de Cursos</title>
</head>
<body>
    <h1>Listado de Cursos</h1>

    <?php
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

    // Consulta para recuperar los cursos
    $sql = "SELECT codigo, nombrecur FROM cursos";
    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Mostrar los datos en una tabla
        echo "<table border='1'><tr><th>Código</th><th>Nombre del Curso</th></tr>";
        // Mostrar los datos de cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nombrecur"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

</body>
</html>
