
<!-- 6. Construir el algoritmo en Javascript para un programa
para cualquier cantidad de estudiantes que lea el nombre,
el sexo y la nota definitiva y halle al estudiante con la mayor
nota y al estudiante con la menor nota y cuantos eran
hombres y cuantos mujeres. -->

<?php 

    if ($_GET) {
        $sexo1 = $_GET["sexo1"];
        $sexo2 = $_GET["sexo2"];
        $sexo3 = $_GET["sexo3"];
        $nombre1 = $_GET["nombre1"];
        $nombre2 = $_GET["nombre2"];
        $nombre3 = $_GET["nombre3"];
        $notaDef1 = $_GET["notaDef1"];
        $notaDef2 = $_GET["notaDef2"];
        $notaDef3 = $_GET["notaDef3"];
        $notaMax = 0;
        $nombreMax;
        $hombres = 0;
        $mujeres = 0;
        if ($notaDef1 >  $notaMax || $notaDef2 >  $notaMax || $notaDef1 >  $notaMax) {

            if ($notaDef1 >  $notaMax) {
                $notaMax = $notaDef1;
                $nombreMax = $nombre1;
            }
            if ($notaDef2 >  $notaMax) {
                $notaMax = $notaDef2;
                $nombreMax = $nombre2;
            }
            if ($notaDef3 >  $notaMax) {
                $notaMax = $notaDef3;
                $nombreMax = $nombre3;
            }
            
        }

        if ($sexo1 == 0 || $sexo2 == 0 || $sexo3 == 0) {
            $mujeres ++;
        }
        if ($sexo1 == 0 || $sexo2 == 0 || $sexo3 == 0) {
            $mujeres ++;
        }
        if ($sexo1 == 0 || $sexo2 == 0 || $sexo3 == 0) {
            $mujeres ++;
        }
        if($sexo1 == 1 || $sexo2 == 1 || $sexo3 == 1){
            $hombres ++;
        }
        if($sexo1 == 1 || $sexo2 == 1 || $sexo3 == 1){
            $hombres ++;
        }
        if($sexo1 == 1 || $sexo2 == 1 || $sexo3 == 1){
            $hombres ++;
        }

        echo "El estudiante {$nombreMax} fue el que saco mejor promedio con un promedio de {$notaMax}, ademas de eso se registraron que habian {$mujeres} mujer/es y {$hombres} hombre/s";
    }

?>