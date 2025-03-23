<html>
<head>
    <title>Resultado de Puntaje</title>
</head>
<body>
    <?php
    echo "La dirección: " . $_REQUEST['direccion'] . " tiene ";
    ?>
    <img src="PRACTICA40.2.php?puntos=<?php echo $_REQUEST['puntos']; ?>" alt="Gráfico de puntaje">
</body>
</html>
