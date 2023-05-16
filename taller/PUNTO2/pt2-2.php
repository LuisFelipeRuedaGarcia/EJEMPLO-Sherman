<?php 

    if ($_GET) {
        $numero = $_GET["numero"];
        $number = $numero % 2;
        if ($number == 0) {
            if ($numero > 10) {
                echo "Su numero es par y mayor a diez";
            }
            else{
                echo "Su numero es par pero no mayor a 10";
            }
        }else{
            if ($numero > 10) {
                echo "Su numero es impar pero mayor a diez";
            }
            else{
                echo "Su numero es impar pero no mayor a diez";
            }
        }

    }

?>