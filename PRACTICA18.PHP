<html>
<head>
    <title>Vectores Asociativos - Claves de Usuarios</title>
</head>
<body>
    <h1>Clave de Acceso de Usuarios</h1>

    <?php
    // Crear un vector asociativo con las claves de acceso de 5 usuarios
    $usuarios = array(
        "usuario1" => "clave123",
        "usuario2" => "abc456",
        "usuario3" => "password789",
        "usuario4" => "claveSecreta123",
        "usuario5" => "admin2024"
    );

    // Acceder e imprimir cada componente del vector asociativo
    echo "<p><b>Clave de acceso de cada usuario:</b></p>";
    
    foreach ($usuarios as $usuario => $clave) {
        echo "<p><b>$usuario</b>: $clave</p>";
    }
    ?>

</body>
</html>
