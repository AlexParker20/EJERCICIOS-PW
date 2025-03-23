<html>
<head>
<title>Generar número aleatorio</title>
</head>
<body>
<h1>Generador de número aleatorio</h1>
<p>
<?php

$num = rand(1, 100);


echo "El número generado es: $num <br>";

if ($num <= 50) {
    echo "El número es menor o igual a 50.";
} else {
    echo "El número es mayor a 50.";
}
?>
</p>
</body>
</html>
