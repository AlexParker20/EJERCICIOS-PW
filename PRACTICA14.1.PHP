<html>
<head>
    <title>Contrato Modificado</title>
</head>
<body>
    <h1>Contrato Modificado</h1>
    <?php
    // Verificar si el formulario fue enviado
    if (isset($_POST['contract'])) {
        $contract = $_POST['contract'];
        
        // Mostrar el contrato con las modificaciones realizadas por el operador
        echo "<h3>Contrato Final:</h3><pre>$contract</pre>";
    } else {
        echo "<p>Por favor, completa los campos del contrato.</p>";
    }
    ?>
</body>
</html>
