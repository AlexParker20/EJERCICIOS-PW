<?php
// Librería para la conexión a la base de datos

function retornarConexion() {
    // Datos de conexión a la base de datos
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos = "phpfacil";

    // Conectar a MySQL
    $conexion = mysql_connect($host, $usuario, $contrasena);

    // Verificar la conexión
    if (!$conexion) {
        die("Error de conexión: " . mysql_error());
    }

    // Seleccionar la base de datos
    $dbSeleccionada = mysql_select_db($baseDeDatos, $conexion);

    // Verificar si se seleccionó la base de datos
    if (!$dbSeleccionada) {
        die("Error seleccionando la base de datos: " . mysql_error());
    }

    // Retornar la conexión
    return $conexion;
}
?>
