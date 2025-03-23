<!-- PRACTICA43.1.php -->
<?php
// Establecer la conexión con la base de datos
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'nombre_base_datos');

// Verificar si la conexión es exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];

// Validar la fecha de nacimiento
if (checkdate($mes, $dia, $anio)) {
    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO ALUMNOS (nombre, fecha_nacimiento) VALUES ('$nombre', '$anio-$mes-$dia')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Alumno registrado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
} else {
    echo "La fecha de nacimiento ingresada no es válida.";
}

// Cerrar la conexión
$conexion->close();
?>
<br><br>
<a href="PRACTICA43.php">Volver al formulario</a>
