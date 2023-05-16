<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 6</title>
</head>
<body>
    <!-- 6. Construir el algoritmo en Javascript para un programa
para cualquier cantidad de estudiantes que lea el nombre,
el sexo y la nota definitiva y halle al estudiante con la mayor
nota y al estudiante con la menor nota y cuantos eran
hombres y cuantos mujeres. -->
    <form action="pt6-2.php" method ="get">
        <p>------------------------------------------------------------------------------------------------------------------------</p>
        <label for="nombre1">Inserte el nombre del estudiante</label><br><br>
            <input type="text" name="nombre1"><br><br>
        <label for="sexo1">Inserte "1" si el estudiante es hombre y inserte "0" si el estudiante es mujer</label>
            <input type="number" max="1" min="0" name="sexo1">
            <br><br><label for="notaDef1">Inserte la nota definitiva del estudiante</label>
            <input type="number" max="5" min="0" name="notaDef1"><br><br>
        <p>------------------------------------------------------------------------------------------------------------------------</p>
            <label for="nombre2">Inserte el nombre del estudiante</label><br><br>
            <input type="text" name="nombre2"><br><br>
        <label for="sexo2">Inserte "1" si el estudiante es hombre y inserte "0" si el estudiante es mujer</label>
            <input type="number" max="1" min="0" name="sexo2">
            <br><br><label for="notaDef2">Inserte la nota definitiva del estudiante</label>
            <input type="number" max="5" min="0" name="notaDef2"><br><br>            
        <p>------------------------------------------------------------------------------------------------------------------------</p>
            <label for="nombre3">Inserte el nombre del estudiante</label><br><br>
            <input type="text" name="nombre3"><br><br>
        <label for="sexo3">Inserte "1" si el estudiante es hombre y inserte "0" si el estudiante es mujer</label>
            <input type="number" max="1" min="0" name="sexo3">
            <br><br><label for="notaDef3">Inserte la nota definitiva del estudiante</label>
            <input type="number" max="5" min="0" name="notaDef3"><br><br>
            <p>------------------------------------------------------------------------------------------------------------------------</p>
            <input type="submit" name="enviar">
    </form>


</body>
</html>