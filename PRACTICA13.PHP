<html>
<head>
    <title>Formulario de Ingresos Anuales</title>
</head>
<body>
    <h1>Formulario de Ingresos Anuales</h1>
    <form action="PRACTICA13.1.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="income">Selecciona tu rango de ingresos anuales:</label><br>
        <select id="income" name="income">
            <option value="1-1000">1 - 1000</option>
            <option value="1001-3000">1001 - 3000</option>
            <option value=">3000">> 3000</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
