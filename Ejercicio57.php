<html>
<head>
<title>Problema</title>
</head>
<body
<?php if (isset($_COOKIE['color'])) echo " bgcolor=\"$_COOKIE[color]\""
?>
>
<form action="Ejercicio57.1.php" method="post">
Seleccione de que color desea que sea la página de ahora en más:<br>
<input type="radio" value="rojo" name="radio">Rojo<br>
<input type="radio" value="verde" name="radio">Verde<br>
<input type="radio" value="azul" name="radio">Azul<br>
<input type="submit" value="Crear cookie">
</form>
</body>
</html>