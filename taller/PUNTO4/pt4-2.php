<?php 

    if ($_GET) {
        $edad1 = $_GET["edad1"];
        $edad2 = $_GET["edad2"];
        $edad3 = $_GET["edad3"];
        $nombre1 = $_GET["nombre1"];
        $nombre2 = $_GET["nombre2"];
        $nombre3 = $_GET["nombre3"];
        $nombreM;
        $edadM = 0;
        if ($edad1 > $edadM || $edad2 > $edadM || $edad3 > $edadM) {
            if ($edad1 > $edadM) {
                $edadM = $edad1;
                $nombreM = $nombre1;
            }
            if ($edad2 > $edadM){
                $edadM = $edad2;
                $nombreM = $nombre2;
            }
            if ($edad3 > $edadM){
                $edadM = $edad3;
                $nombreM = $nombre3;
            }
        }

        echo "La edad mas alta le corresponde a {$nombreM} con {$edadM}";
    }

?>