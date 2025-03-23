<html>
<head>
<title>Mi primer programa PHP</title>
</head>
<body>
<h1>Bienvenido a mi primer programa PHP</h1>
<p>
<?php
// Declarar variables
$nombre = "Juan";
$edad = 20;
$hobby = "leer libros";

// Operaciones con variables
$edad_el_ano_que_viene = $edad + 1;

// Mostrar un mensaje con variables
echo "Hola, mi nombre es <b>$nombre</b> y tengo <b>$edad</b> años.<br>";
echo "El próximo año tendré <b>$edad_el_ano_que_viene</b> años.<br>";
echo "Me gusta <b>$hobby</b> en mi tiempo libre.";
?>
</p>
</body>
</html>
