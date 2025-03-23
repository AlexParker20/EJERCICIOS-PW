<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar del 2</title>
</head>
<body>
    <h2>Tabla de multiplicar del 2</h2>

    <h3>Usando for</h3>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "2 x $i = " . (2 * $i) . "<br>";
    }
    ?>

    <h3>Usando while</h3>
    <?php
    $i = 1;
    while ($i <= 10) {
        echo "2 x $i = " . (2 * $i) . "<br>";
        $i++;
    }
    ?>

    <h3>Usando do/while</h3>
    <?php
    $i = 1;
    do {
        echo "2 x $i = " . (2 * $i) . "<br>";
        $i++;
    } while ($i <= 10);
    ?>
</body>
</html>
