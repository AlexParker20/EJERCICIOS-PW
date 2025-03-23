<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "PHPFACIL");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos agrupados por curso
$sql = "
    SELECT c.nombrecur, COUNT(a.id) AS cantidad_inscriptos, GROUP_CONCAT(a.nombre SEPARATOR ' - ') AS nombres
    FROM cursos c
    LEFT JOIN alumnos a ON c.codigo = a.curso_id
    GROUP BY c.codigo;
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recorrer los resultados
    while ($row = $result->fetch_assoc()) {
        echo "<h2>Nombre del curso: " . $row['nombrecur'] . "</h2>";
        echo "<p>Cantidad de inscripciones: " . $row['cantidad_inscriptos'] . "</p>";
        echo "<p>Nombres: " . $row['nombres'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No hay cursos inscritos.";
}

// Cerrar la conexión
$conn->close();
?>
