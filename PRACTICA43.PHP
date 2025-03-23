
<html>
<head>
    <title>Formulario de Ingreso de Alumno</title>
</head>
<body>
    <h2>Ingrese los datos del alumno</h2>
    <form action="PRACTICA43.1.php" method="POST">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="dia">Día de Nacimiento:</label>
        <select id="dia" name="dia">
            <?php 
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <label for="mes">Mes de Nacimiento:</label>
        <select id="mes" name="mes">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <label for="anio">Año de Nacimiento:</label>
        <select id="anio" name="anio">
            <?php
            $currentYear = 2006;
            for ($i = $currentYear; $i >= 1900; $i--) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Registrar Alumno">
    </form>
</body>
</html>
