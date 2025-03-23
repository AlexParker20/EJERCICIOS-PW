<html>
<head>
<title>MySQL 01 - Consulta a BD (Agenda)</title>
</head>
<body>
<h1>Mostrar Nombres de la Agenda. BD </h1>
<?php
$dp = mysql_connect("localhost", "root", "" ); mysql_select_db("agenda", $dp);
$sql = "SELECT * FROM direcciones" ;
$resultado = mysql_query($sql);
while ($row = mysql_fetch_assoc($resultado)) { echo "$row[Nombre] $row[Apellido]<br>\n";
}
mysql_close($dp);
?>
</body>
</html>