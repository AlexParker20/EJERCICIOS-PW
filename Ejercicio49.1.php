<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","z80") or die("Problemas en la conexion");
mysql_select_db("phpfacil",$conexion) or
die("Problemas en la seleccion de la base de datos"); mysql_query("insert into alumnos(nombre,mail,codigocurso) values
('$_REQUEST[nombre]', '$_REQUEST[mail]',
$_REQUEST[codigocurso])", $conexion) or
die("Problemas en el select".mysql_error());


mysql_close($conexion);
echo "El alumno fue dado de alta.";
?>
</body>
</html>