<?php
// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$donacion = $_POST['donacion'];

// Formatear el importe con ceros a la izquierda
$importe_formateado = sprintf("%07d", $donacion); // Formato con 7 dígitos, completando con ceros

// Mostrar los datos formateados
echo "<h2>Gracias por tu donación!</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo Electrónico: $email</p>";
echo "<p>Importe a donar: \$ $importe_formateado dolares</p>";
?>
