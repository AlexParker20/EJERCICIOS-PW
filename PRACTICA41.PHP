<html>
<head>
    <title>Registrar Queja</title>
</head>
<body>
    <h2>Registrar una Queja</h2>
    <form action="PRACTICA41.1.php" method="POST">
        <label for="nombre">Nombre del visitante:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="queja">Descripción de la queja:</label><br>
        <textarea id="queja" name="queja" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Registrar Queja">
    </form>
    <br>
    <a href="41.2.php">Ver todas las quejas registradas</a>
</body>
</html>
