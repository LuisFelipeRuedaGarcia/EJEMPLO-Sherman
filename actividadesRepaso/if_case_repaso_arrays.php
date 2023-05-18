<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<body>
    <form action="if_case_repaso_arrays.php" method="POST">
        <label>Digite el nombre del contador</label>
            <input type="number" name="counter" min="0">
            <input type="submit" value="Generar">
    </form>
</body>
</html> -->

<?php

    /* $salario = 90000;
    $No_subsidio = "Usted (NO) tiene derecho a un subsidio";
    $si_subsidio = "Usted (SI) tiene derecho a un subsidio";
    if ($salario >= 5000000) {
        echo $No_subsidio;
    }
    elseif($salario  >= 3000000){
        echo $No_subsidio;
    }
    elseif($salario >= 1000000){
        echo $si_subsidio;
    }
    else{
        echo "usted tiene derecho a subsiduo de vivienda";
    } */

    //---------------------------------------------------------------------

    /* $temperatura = 15;
    if ($temperatura < 0 || $temperatura > 30) {
        echo "El clima no es favorable";
    }
    else{
        echo "El clima es bueno";
    } */

    //---------------------------------------------------------------------

    /* $hora = "03:00 P.M.";
    switch ($$hora) {
        case '06:00 A.M.':
            echo "Camper, Tienes Software Skill";
            break;
        case '08:00 A.M.':
            echo "Camper, Tienes Break, Pausa Activa";
            break;
        case '10:00 A.M.':
            echo "Camper , Tienes clase con el teacher de ingles";
            break;
        case '12:00 A.M.':
            echo "Camper Almuerza";
            break;
        case '02:00 P.M.':
            echo "Camper Tienes Software review";
            break;
        default:
            echo "Camper descansa";
            break;
    } */

    //---------------------------------------------------------------------

    /* if ($_POST) {
        $counter = $_POST["counter"];
        for ($i=0; $i < $counter; $i++) { 
            echo $i . "<br>";
        }
    } */

    //---------------------------------------------------------------------

    /* $contador = 0;

    while ($contador <= 10) {
        echo $contador . "<br>";
        $contador++;
    } */

    //---------------------------------------------------------------------

    /* $comida = array("panzerotti" , "sushi" , "sopa" , "pescado");

    echo $comida [0] . "<br>";
    echo $comida [1] . "<br>";
    echo $comida [2] . "<br>";
    echo $comida [3] . "<br>";

    echo "<br>";

    array_push ($comida , "Camarones"); // añade el final
    array_pop ($comida): //elimina el final
    array_shift ($comida); // elimina el comienzo

    foreach ($comida as $bocado){
        echo $bocado . "<br>";
    } */

    //---------------------------------------------------------------------
?>