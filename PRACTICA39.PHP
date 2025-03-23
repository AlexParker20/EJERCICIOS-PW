<?php
// Crear una imagen de 200x50 píxeles
$ancho = 200;
$alto = 50;
$imagen = imagecreate($ancho, $alto);

// Asignar colores
$fondo = imagecolorallocate($imagen, 255, 255, 255); // Blanco (fondo)
$botonColor = imagecolorallocate($imagen, 0, 102, 204); // Azul (botón)
$textoColor = imagecolorallocate($imagen, 255, 255, 255); // Blanco (texto)

// Dibujar un rectángulo relleno para el botón
imagefilledrectangle($imagen, 10, 10, $ancho - 10, $alto - 10, $botonColor);

// Escribir el texto dentro del botón
$text = "Haz clic aquí"; // Texto del botón
$fontSize = 5; // Tamaño de fuente (5 es un tamaño predeterminado en PHP)
$textoAncho = imagefontwidth($fontSize) * strlen($text); // Calcular el ancho del texto
$textoAlto = imagefontheight($fontSize); // Calcular la altura del texto

// Posicionar el texto en el centro del botón
$posX = ($ancho - $textoAncho) / 2;
$posY = ($alto - $textoAlto) / 2;

// Escribir el texto en la imagen
imagestring($imagen, $fontSize, $posX, $posY, $text, $textoColor);

// Configurar los encabezados para la imagen
header("Content-Type: image/png");

// Generar la imagen en formato PNG
imagepng($imagen);

// Liberar la memoria
imagedestroy($imagen);
?>
