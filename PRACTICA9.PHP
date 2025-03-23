<html>
<head>
<title>Generar Número Aleatorio</title>
</head>
<body>
<h1>Generar un número aleatorio entre 1 y 5</h1>
<p>
<?php
$numero = rand(1, 5);

if ($numero == 1) {
    echo "El número generado es: uno";
} elseif ($numero == 2) {
    echo "El número generado es: dos";
} elseif ($numero == 3) {
    echo "El número generado es: tres";
} elseif ($numero == 4) {
    echo "El número generado es: cuatro";
} else {
    echo "El número generado es: cinco";
}
?>
</p>
</body>
</html>
