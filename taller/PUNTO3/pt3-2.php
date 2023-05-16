<?php 

    if ($_GET) {
        $resistencia = $_GET["resistencia"];
        $intensidad= $_GET["corriente"];
        $voltaje;
        $voltaje = $resistencia * $intensidad;

        echo "El voltaje de la corriente con resistencia {$resistencia} y la intensidad {$intensidad} fue de {$voltaje}";
    }

?>