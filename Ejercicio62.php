<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post">
Ingrese dirección de sitio web (ej www.google.com):
<input type="text" name="direccion" size="30"><br>
<input type="submit" value="Redireccionar">
</form>
</body>
</html>

pagina2.php
<?php
header("Location: http://$_REQUEST[direccion]");
?>