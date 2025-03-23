
<html>
<head>
    <title>Formulario de Puntaje</title>
</head>
<body>
    <form action="PRACTICA40.1.php" method="GET">
        <label for="direccion">Ingrese la dirección de un sitio:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="puntos">Califique el sitio (0 a 5):</label>
        <select name="puntos" id="puntos">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
