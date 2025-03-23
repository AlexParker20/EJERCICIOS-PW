<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "PHPFACIL");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener todos los cursos
$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los cursos con hipervínculos
    echo "<h1>Listado de Cursos</h1>";
    while ($row = $result->fetch_assoc()) {
        // Crear el hipervínculo para cada curso
        echo "<p><a href='PRACTICA31_detalle.php?curso_id=" . $row['codigo'] . "'>" . $row['nombrecur'] . "</a></p>";
    }
} else {
    echo "No hay cursos disponibles.";
}

// Cerrar la conexión
$conn->close();
?>
