<html>
<head>
    <title>Alta de Alumno</title>
</head>
<body>
    <h1>Formulario de Alta de Alumno</h1>

    <!-- Formulario para ingresar el nombre del alumno y seleccionar el curso -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Seleccionar Curso:</label><br>
        
        <?php
        // Conectar a la base de datos
        $conn = new mysqli("localhost", "root", "", "PHPFACIL");

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Obtener todos los cursos disponibles
        $sql = "SELECT codigo, nombrecur FROM cursos";
        $result = $conn->query($sql);

        // Mostrar los cursos como botones de radio
        while ($row = $result->fetch_assoc()) {
            echo '<input type="radio" name="curso" value="' . $row['codigo'] . '" required> ' . $row['nombrecur'] . '<br>';
        }

        // Cerrar la conexión
        $conn->close();
        ?><br>

        <input type="submit" value="Registrar Alumno">
    </form>

    <?php
    // Procesar el formulario y registrar el alumno
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $curso_id = $_POST['curso'];

        // Conectar a la base de datos
        $conn = new mysqli("localhost", "root", "", "PHPFACIL");

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta para insertar el nuevo alumno
        $sql = "INSERT INTO alumnos (nombre, curso_id) VALUES (?, ?)";

        // Preparar y ejecutar la consulta
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("si", $nombre, $curso_id);
            if ($stmt->execute()) {
                echo "<p>El alumno ha sido registrado exitosamente.</p>";
            } else {
                echo "<p>Error al registrar al alumno: " . $conn->error . "</p>";
            }
            $stmt->close();
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

</body>
</html>
