<html>
<head>
    <title>Formulario de Deportes</title>
</head>
<body>
    <h1>Formulario de Deportes</h1>
    <form action="PRACTICA12.1.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="sports">Selecciona los deportes que practicas:</label><br>
        <input type="checkbox" id="futbol" name="sports[]" value="Futbol">
        <label for="futbol">Futbol</label><br>

        <input type="checkbox" id="basket" name="sports[]" value="Basket">
        <label for="basket">Basket</label><br>

        <input type="checkbox" id="tennis" name="sports[]" value="Tennis">
        <label for="tennis">Tennis</label><br>

        <input type="checkbox" id="voley" name="sports[]" value="Voley">
        <label for="voley">Voley</label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
