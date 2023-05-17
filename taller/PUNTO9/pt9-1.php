<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 9</title>
</head>
<body>
    <!-- 9. N atletas han pasado a finales en salto triple en los juegos
olímpicos femenino de 2022. Diseñe un programa que pida por
teclado los nombres de cada atleta finalista y a su vez, sus
marcas del salto en metros. Informar el nombre de la atleta
campeona que se quede con la medalla de oro y si rompió
récord, reportar el pago que será de 500 millones. El récord
esta en 15,50 metros. -->

    <form action="pt9-2.php" method="get">
        <label for="atleta1">Ingrese el nombre del atleta finalista</label>
            <input type="text" name ="atleta1">
        <label for="marca1">Ingrese la marca de salto en metros</label>
            <input type="text" name="marca1"><br><br>

        <label for="atleta2">Ingrese el nombre del atleta finalista</label>
            <input type="text" name ="atleta2">
        <label for="marca2">Ingrese la marca de salto en metros</label>
            <input type="text" name="marca2"><br><br>

        <label for="atleta3">Ingrese el nombre del atleta finalista</label>
            <input type="text" name ="atleta3">
        <label for="marca3">Ingrese la marca de salto en metros</label>
            <input type="text" name="marca3"><br><br>
            <input type="submit" name="enviar">
    </form>
</body>
</html>