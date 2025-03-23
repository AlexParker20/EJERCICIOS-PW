
<html>
<head>
    <title>Formulario de Fecha</title>
</head>
<body>
    <h2>Ingrese una fecha</h2>
    <form action="PRACTICA42.1.php" method="POST">
        <label for="dia">Día:</label>
        <select id="dia" name="dia">
            <?php for ($i = 1; $i <= 31; $i++) { echo "<option value='$i'>$i</option>"; } ?>
        </select><br><br>

        <label for="mes">Mes:</label>
        <select id="mes" name="mes">
            <?php
            $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
            foreach ($meses as $index => $mes) {
                echo "<option value='" . ($index + 1) . "'>$mes</option>";
            }
            ?>
        </select><br><br>

        <label for="anio">Año:</label>
        <select id="anio" name="anio">
            <?php
            $currentYear = date("Y");
            for ($i = $currentYear; $i >= 1900; $i--) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Validar Fecha">
    </form>
</body>
</html>
