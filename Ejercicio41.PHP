<html>
<head>
<title>MySQL 02 - Consulta BD con tabla (Agenda)</title>
</head>
<body>
<h1>MySQL 02 - Consulta BD con tabla (Agenda)</h1>
<?php
$dp = mysql_connect("localhost", "root", "" ); mysql_select_db("agenda", $dp);
$sql = "SELECT * FROM direcciones" ;
$resultado = mysql_query($sql);
$campos = mysql_num_fields($resultado);
$filas = mysql_num_rows($resultado); echo "<p>Cantidad de filas: $filas</p>\n";
echo "<table border='1' cellspacing='0'>\n"; //Empezar tabla echo "<tr>"; //Crear fila
for ($i = 0; $i < $campos; $i++) {
$nombrecampo = mysql_field_name($resultado, $i); echo "<th>$nombrecampo</th>";
}
echo "</tr>\n"; //Cerrar fila

while ($row = mysql_fetch_assoc($resultado)) { echo "<tr>"; //Crear fila
foreach ($row as $key => $value) { echo "<td>$value&nbsp;</td>";
}
echo "</tr>\n"; //Cerrar fila
}
echo "</table>\n"; //Cerrar tabla mysql_close($dp);
?>
</body>
</html>