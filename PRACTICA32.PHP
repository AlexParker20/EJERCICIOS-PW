<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "PHPFACIL");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el número de registros por página
$records_per_page = 3;

// Determinar el número de página actual
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($page - 1) * $records_per_page;

// Consulta para obtener los cursos con paginación
$sql = "SELECT * FROM cursos LIMIT $start_from, $records_per_page";
$result = $conn->query($sql);

// Mostrar los registros de la tabla CURSOS
echo "<h1>Listado de Cursos</h1>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['codigo'] . " - " . $row['nombrecur'] . "</p>";
    }
} else {
    echo "<p>No hay cursos disponibles.</p>";
}

// Consulta para contar el número total de registros en la tabla
$sql_total = "SELECT COUNT(*) AS total FROM cursos";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_records = $row_total['total'];

// Calcular el número total de páginas
$total_pages = ceil($total_records / $records_per_page);

// Navegación de páginas (Anterior / Siguiente)
echo "<div>";
if ($page > 1) {
    echo "<a href='PRACTICA32.php?page=" . ($page - 1) . "'>Anterior</a> ";
}

for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='PRACTICA32.php?page=" . $i . "'>" . $i . "</a> ";
}

if ($page < $total_pages) {
    echo "<a href='PRACTICA32.php?page=" . ($page + 1) . "'>Siguiente</a>";
}
echo "</div>";

// Cerrar la conexión
$conn->close();
?>
