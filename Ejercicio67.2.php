<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
$conexion=mysql_connect("localhost","root","z80") or die("Problemas en la conexion");
mysql_select_db("phpfacil",$conexion) or
die("Problemas en la selección de la base de datos");
$registros=mysql_query("select alu.codigo as codigo,nombre,mail,
codigocurso,fechanac,nombrecur from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso",
$conexion) or die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
echo "Codigo:".$reg['codigo']."<br>";
echo "Nombre:".$reg['nombre']."<br>";
echo "Mail:".$reg['mail']."<br>";
echo "Fecha de Nacimiento:".$reg['fechanac']."<br>"; echo "Curso:".$reg['nombrecur']."<br>";
echo "<hr>";
}
mysql_close($conexion);
?>
</body>
</html>