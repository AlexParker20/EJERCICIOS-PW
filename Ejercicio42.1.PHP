<?php
$dp = @mysql_connect("localhost", "root", "") or die("<p>No se ha podido establecer la conexion con MySQL.</p>");
@mysql_select_db("agenda", $dp) or die("<p>No se ha podido establecer la conexion con la base de datos.</p>");
?>