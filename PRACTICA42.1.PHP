<?php
// Obtener los datos enviados del formulario
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];

// Validar si la fecha es correcta
if (checkdate($mes, $dia, $anio)) {
    echo "La fecha $dia/$mes/$anio es válida.";
} else {
    echo "La fecha $dia/$mes/$anio no es válida.";
}
?>

<br><br>
<a href="PRACTICA42.php">Volver al formulario</a>
