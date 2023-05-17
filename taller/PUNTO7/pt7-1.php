<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 7</title>
</head>
<body>
    <!-- 7. Programa que pida el ingreso del nombre y precio de un artículo y la
    cantidad que lleva el cliente. Mostrar lo que debe pagar el comprador
    en su factura. -->
    <form action="pt7-2.php" method="get">
        <label for="nombre">Ingresa el nombre</label>
            <input type="text" name="nombre">
        <label for="nombreProducto">Ingrese el nombre del producto</label>
            <input type="text" name="nombreProducto">
        <label for="precio">Ingrese el precio del articulo</label>
            <input type="number" name="precio">
        <label for="cantidad">Ingrese la cantidad del producto</label>
            <input type="number" min="1" name="cantidad">
            <input type="submit" name="enviar">
    </form>
</body>
</html>