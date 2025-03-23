<html>
<head>
    <title>Pedido de Pizzas</title>
</head>
<body>
    <h1>Formulario de Pedido de Pizzas</h1>
    <form action="PRACTICA16.1.php" method="post">
        Nombre: <input type="text" name="nombre" required><br><br>
        Dirección: <input type="text" name="direccion" required><br><br>

        <h3>Seleccione los tipos de pizza y la cantidad:</h3>
        <input type="checkbox" name="pizzas[]" value="Jamon y Queso"> Jamon y Queso
        Cantidad: <input type="number" name="cantidad_jamon" min="1" value="1"><br><br>
        
        <input type="checkbox" name="pizzas[]" value="Napolitana"> Napolitana
        Cantidad: <input type="number" name="cantidad_napolitana" min="1" value="1"><br><br>
        
        <input type="checkbox" name="pizzas[]" value="Mozzarella"> Mozzarella
        Cantidad: <input type="number" name="cantidad_mozzarella" min="1" value="1"><br><br>

        <input type="submit" value="Confirmar Pedido">
    </form>
</body>
</html>
