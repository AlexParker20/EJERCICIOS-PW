<?php
// Definir el directorio donde se guardarán los archivos subidos
$upload_dir = "uploads/";

// Crear el directorio si no existe
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $uploaded_files = [];

    // Iterar sobre los archivos subidos
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_error = $_FILES['files']['error'][$i];
        
        // Verificar si hubo errores durante la carga del archivo
        if ($file_error === UPLOAD_ERR_OK) {
            // Verificar el tamaño máximo permitido (por ejemplo, 5MB)
            if ($file_size > 5000000) {
                $errors[] = "El archivo $file_name es demasiado grande. El tamaño máximo permitido es 5MB.";
            } else {
                // Mover el archivo al directorio de carga
                $file_path = $upload_dir . basename($file_name);
                if (move_uploaded_file($file_tmp, $file_path)) {
                    $uploaded_files[] = $file_name;
                } else {
                    $errors[] = "Hubo un problema al subir el archivo $file_name.";
                }
            }
        } else {
            $errors[] = "Error al subir el archivo $file_name. Código de error: $file_error";
        }
    }

    // Mostrar los resultados
    if (!empty($errors)) {
        echo "<p><strong>Errores al subir archivos:</strong></p>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }

    if (!empty($uploaded_files)) {
        echo "<p><strong>Archivos subidos con éxito:</strong></p>";
        foreach ($uploaded_files as $file) {
            echo "<p>$file</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivos al Servidor</title>
</head>
<body>
    <h1>Formulario para Subir Archivos</h1>
    <form action="PRACTICA33.php" method="post" enctype="multipart/form-data">
        <label for="files[]">Selecciona hasta 3 archivos:</label><br>
        <input type="file" name="files[]" multiple><br><br>
        <input type="submit" value="Subir Archivos">
    </form>
</body>
</html>
