<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "PHPFACIL");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];

    // Consulta SQL con INNER JOIN para obtener los datos del alumno y el curso
    $sql = "SELECT a.nombre, a.mail, c.nombrecur 
            FROM alumnos a
            INNER JOIN cursos c ON a.curso_id = c.codigo
            WHERE a.id_alumno = ?";
    
    // Preparar y ejecutar la consulta
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $codigo);  // Vincular el código de alumno
        $stmt->execute();
        $stmt->store_result();

        // Verificar si se encontró el alumno
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($nombre, $mail, $nombrecur);
            $stmt->fetch();

            // Mostrar los datos del alumno y su curso
            echo "<h2>Datos del Alumno</h2>";
            echo "<p><b>Nombre:</b> $nombre</p>";
            echo "<p><b>Email:</b> $mail</p>";
            echo "<p><b>Curso:</b> $nombrecur</p>";
        } else {
            // Si no se encuentra el alumno
            echo "<p>No se encontró un alumno con el código ingresado.</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Error en la consulta: " . $conn->error . "</p>";
    }
}

// Cerrar la conexión
$conn->close();
?>
