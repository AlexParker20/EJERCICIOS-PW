<?php
// Iniciar sesión
session_start();

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$dbname = "phpfacil";

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar si hay error de conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el correo del formulario
    $email = $_POST['email'];

    // Consultar en la base de datos si el correo existe
    $sql = "SELECT nombre FROM ALUMNOS WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el correo existe, obtener el nombre
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];

        // Almacenar el nombre en la variable de sesión
        $_SESSION['nombre'] = $nombre;

        // Redirigir a la página de bienvenida
        header("Location: bienvenida.php");
        exit();
    } else {
        // Si el correo no existe
        echo "<p>El correo electrónico no está registrado.</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>
<body>
    <h1>Formulario de inicio de sesión</h1>
    <form action="login.php" method="post">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
