<?php
// Función que recibe un entero y devuelve el carácter ASCII correspondiente
function obtener_caracter_ascii($valor) {
    return chr($valor); // La función chr() devuelve el carácter ASCII para un valor numérico
}

// Imprimir la tabla de caracteres ASCII
echo "<h2>Tabla de caracteres ASCII</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Valor ASCII</th><th>Carácter</th></tr>";

// Recorrer los valores ASCII del 32 al 126 (los caracteres imprimibles comunes)
for ($i = 32; $i <= 126; $i++) {
    // Usamos sprintf para formatear la salida
    $caracter = obtener_caracter_ascii($i);
    echo sprintf("<tr><td>%d</td><td>%s</td></tr>", $i, $caracter);
}

echo "</table>";
?>
