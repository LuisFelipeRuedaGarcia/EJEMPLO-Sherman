<?php 

if ($_GET) {
    $lado = $_GET["lado"];
    $base = $_GET["base"];
    $altura = $_GET["altura"];

    $area = $base * $altura;
    $perimetro = $lado * $lado;
    echo "El perimetro del cuadrado de lado {$lado} es de {$perimetro} <br>";
    echo "El area de el triangulo de base {$base} y de altura {$altura} es de {$area}";

}

?>