<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "PHPFACIL");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los nombres de los cursos
$sql = "SELECT nombrecur FROM cursos";
$result = $conn->query($sql);

// Verificar si hay cursos
if ($result->num_rows > 0) {
    echo "<h1>Listado de Cursos</h1>";

    // Mostrar los nombres de los cursos
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['nombrecur'] . "</p>";
    }

    // Consulta SQL para contar la cantidad total de cursos
    $count_sql = "SELECT COUNT(*) AS total_cursos FROM cursos";
    $count_result = $conn->query($count_sql);
    
    // Obtener el total de cursos
    if ($count_result->num_rows > 0) {
        $count_row = $count_result->fetch_assoc();
        echo "<p><strong>Total de cursos:</strong> " . $count_row['total_cursos'] . "</p>";
    }

} else {
    echo "<p>No hay cursos disponibles.</p>";
}

// Cerrar la conexión
$conn->close();
?>
