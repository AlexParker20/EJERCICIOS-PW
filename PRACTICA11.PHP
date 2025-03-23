<html>
<head>
    <title>Formulario de Estudios</title>
</head>
<body>
    <h1>Formulario de Estudios</h1>
    <form action="PRACTICA11.1.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="education">Nivel de estudios:</label><br>
        <input type="radio" id="noStudies" name="education" value="No tiene estudios" required>
        <label for="noStudies">No tiene estudios</label><br>

        <input type="radio" id="primary" name="education" value="Estudios primarios">
        <label for="primary">Estudios primarios</label><br>

        <input type="radio" id="secondary" name="education" value="Estudios secundarios">
        <label for="secondary">Estudios secundarios</label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

