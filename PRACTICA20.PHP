// Insertar el nuevo curso en la tabla cursos  
$sql = "INSERT INTO cursos (nombrecur) VALUES ('$nombrecur')";  
if ($conn->query($sql) === TRUE) {  
    echo "<p>Nuevo curso agregado correctamente.</p>";  
} else {  
    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";  
}  
