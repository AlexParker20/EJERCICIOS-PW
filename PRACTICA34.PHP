<?php
// Verificar si la cookie "username" existe
if (isset($_COOKIE['username'])) {
    // Si la cookie existe, mostrar un mensaje de bienvenida con el nombre almacenado
    $name = $_COOKIE['username'];
    echo "<h1>¡Bienvenido, $name!</h1>";
} else {
    // Si la cookie no existe, mostrar el formulario para ingresar el nombre
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name'])) {
        // Almacenar el nombre del visitante en una cookie que dure 30 días
        $name = $_POST['name'];
        setcookie('username', $name, time() + (30 * 24 * 60 * 60), "/"); // 30 días
        echo "<h1>¡Hola, $name}! Gracias por ingresar tu nombre.</h1>";
    } else {
        // Mostrar el formulario si no hay cookie o el nombre no ha sido ingresado
        echo '
        <h1>Por favor ingresa tu nombre:</h1>
        <form action="PRACTICA34.php" method="post">
            <input type="text" name="name" placeholder="Ingresa tu nombre" required>
            <input type="submit" value="Enviar">
        </form>';
    }
}
?>
