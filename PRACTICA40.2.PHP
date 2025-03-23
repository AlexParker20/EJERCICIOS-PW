
<?php
// Crear la imagen en blanco
$width = 300; // Ancho de la imagen
$height = 100; // Altura de la imagen
$image = imagecreatetruecolor($width, $height);

// Definir colores
$bgColor = imagecolorallocate($image, 255, 255, 255); // Fondo blanco
$circleColor = imagecolorallocate($image, 0, 0, 255); // Color del círculo (azul)

// Rellenar el fondo
imagefill($image, 0, 0, $bgColor);

// Obtener el número de puntos desde el parámetro 'puntos'
$puntos = isset($_GET['puntos']) ? (int)$_GET['puntos'] : 0;

// Dibujar círculos según el puntaje
$circleDiameter = 20; // Diámetro de los círculos
$spacing = 40; // Espacio entre círculos
$x = 30; // Coordenada inicial en X
$y = 50; // Coordenada Y fija

for ($i = 0; $i < $puntos; $i++) {
    imagefilledellipse($image, $x + ($i * $spacing), $y, $circleDiameter, $circleDiameter, $circleColor);
}

// Mostrar la imagen
header("Content-Type: image/png");
imagepng($image);
imagedestroy($image);
?>
