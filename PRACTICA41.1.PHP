
<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$queja = $_POST['queja'];

// Obtener la fecha y hora actuales
$fechaHora = date("Y-m-d H:i:s");

// Crear la línea que se guardará en el archivo de texto
$registro = "Fecha y hora: " . $fechaHora . "\nNombre: " . $nombre . "\nQueja: " . $queja . "\n\n";

// Guardar la queja en el archivo de texto
file_put_contents("datos.txt", $registro, FILE_APPEND);

// Redirigir a una página de confirmación o regreso al formulario
echo "Queja registrada con éxito. <br>";
echo "<a href='41.php'>Volver al formulario</a>";
?>
