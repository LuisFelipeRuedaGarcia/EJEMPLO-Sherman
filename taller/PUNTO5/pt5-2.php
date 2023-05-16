<!-- . Construir el algoritmo que lea por teclado dos números,
    si el primero es mayor al segundo informar su suma y
    diferencia, en caso contrario, informar el producto y la
    división del primero respecto al segundo. -->

<?php 

if ($_GET) {
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    if ($numero1 > $numero2) {
        $suma = $numero1 + $numero2;
        $diferencia = $numero1 - $numero2;
        echo "El numero {$numero1} es mayor al numero {$numero2} por {$diferencia} y sumados dan {$suma}";
    }else{
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        echo "El numero {$numero1} es menor o igual a {$numero2}, su producto es {$multiplicacion} y su division es {$division}";
    }
}

?>
