<?php
// Verificar si la cookie "headline" existe
if (isset($_COOKIE['headline'])) {
    // Si la cookie existe, mostrar el titular almacenado
    $headline = $_COOKIE['headline'];
    echo "<h1>Titular de tu preferencia: $headline</h1>";
} else {
    // Si no hay cookie, mostrar todos los titulares disponibles
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['headline'])) {
        // Guardar el tipo de titular seleccionado en una cookie que dura 30 días
        $headline = $_POST['headline'];
        setcookie('headline', $headline, time() + (30 * 24 * 60 * 60), "/"); // 30 días
        echo "<h1>Has seleccionado: $headline</h1>";
    } else {
        // Mostrar los tres titulares como opciones de radio
        echo '
        <h1>Selecciona el tipo de titular que deseas ver:</h1>
        <form action="PRACTICA35.php" method="post">
            <input type="radio" name="headline" value="Noticia Politica" id="politica" required>
            <label for="politica">Noticia Politica</label><br>

            <input type="radio" name="headline" value="Noticia Economica" id="economica">
            <label for="economica">Noticia Economica</label><br>

            <input type="radio" name="headline" value="Noticia Deportiva" id="deportiva">
            <label for="deportiva">Noticia Deportiva</label><br>

            <input type="submit" value="Seleccionar">
        </form>';
    }
}

// Opción para borrar la cookie
if (isset($_GET['borrar_cookie'])) {
    // Borrar la cookie estableciendo su expiración en el pasado
    setcookie('headline', '', time() - 3600, "/");
    echo "<h1>Tu preferencia de titular ha sido borrada. Vuelve a seleccionar un titular.</h1>";
}
?>
