<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 8</title>
</head>
<body>
    <!-- 8. Programa que Ingrese por teclado:
    a. el valor del lado de un cuadrado para mostrar por pantalla el
    perímetro del mismo
    b. la base y la altura de un rectángulo para mostrar el área del
    mismo -->

    <form action="pt8-2.php" method="get">
        <label for="lado">Ingrese el valor del lado de un cuadrado</label>
            <input type="number" name="lado" min="1"><br><br><br><br>
        <label for="base">Ingrese la base de un rectangulo</label>
            <input type="number" name="base" min ="1"><br><br>
        <label for="altura">Ingrese la altura del mismo rectangulo</label>
            <input type="number" name="altura" min="1">
            <input type="submit" name="enviar">
    </form>
</body>
</html>