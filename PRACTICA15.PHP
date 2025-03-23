<html>
<head>
    <title>Vector de Días de la Semana</title>
</head>
<body>
    <h1>Vectores - Días de la Semana</h1>
    <?php
    // Definir un vector con los días de la semana
    $dias_de_la_semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    
    // Imprimir el primer y el último elemento del vector
    echo "<p>Primer día de la semana: " . $dias_de_la_semana[0] . "</p>";
    echo "<p>Último día de la semana: " . $dias_de_la_semana[count($dias_de_la_semana) - 1] . "</p>";
    ?>
</body>
</html>
