<!-- 9. N atletas han pasado a finales en salto triple en los juegos
olímpicos femenino de 2022. Diseñe un programa que pida por
teclado los nombres de cada atleta finalista y a su vez, sus
marcas del salto en metros. Informar el nombre de la atleta
campeona que se quede con la medalla de oro y si rompió
récord, reportar el pago que será de 500 millones. El récord
esta en 15,50 metros. -->
<?php 

    if ($_GET) {
        
        $atleta1 = $_GET["atleta1"];
        $atleta2 = $_GET["atleta2"];
        $atleta3 = $_GET["atleta3"];
        $marca1 = $_GET["marca1"];
        $marca2 = $_GET["marca2"];
        $marca3 = $_GET["marca3"];
        $gano = "no";
        $record = 15.50;
        $nombreGanador;
        $recordPaMedalla = 0;

        if ($marca1 > $recordPaMedalla || $marca2 > $recordPaMedalla || $marca3 > $recordPaMedalla) {
            if ($marca1 > $recordPaMedalla) {
                $recordPaMedalla = $marca1;
                $nombreGanador = $atleta1;
                if ($marca1 > $record) {
                    $record = $marca1;
                    $gano = "si";
                }
            }
            if ($marca2 > $recordPaMedalla) {
                $recordPaMedalla = $marca2;
                $nombreGanador = $atleta2;
                if ($marca2 > $record) {
                    $record = $marca2;
                    $gano = "si";
                }
            }
            if ($marca3 > $recordPaMedalla) {
                $recordPaMedalla = $marca3;
                $nombreGanador = $atleta3;
                if ($marca3 > $record) {
                    $record = $marca3;
                    $gano = "si";
                }
            }
        }

        echo "El atleta campeon/campeona fue {$nombreGanador} con una marca de salto de {$recordPaMedalla} y {$gano} ganó los 500.000 Millones";
    }

?>