<?php 
    echo "<h1>AYUDAAAAAAAAAAA</h1>";
    if($_POST){
        $valorT;
        $taller1 = '"taller1.php"';
        $name = '"notis"';
        $name2 = '"notis1"';
        $name3 = '"notis2"';
        $submit = '"submit"';
        $enviar = '"enviar"';
        $tipo = '"number"';
        $metodo = '"post"';
        $cantidad = $_POST["notas"];
            echo "<form method=$metodo>";
                echo "<label>Ingrese la nota </label>";
                    echo "<input type=$tipo name =$name> <br><br>";
                echo "<label>Ingrese la nota </label>";
                    echo "<input type=$tipo name =$name2> <br><br>";
                echo "<label>Ingrese la nota </label>";
                    echo "<input type=$tipo name =$name3> <br><br>";
                    echo "<input type= $submit value= $enviar>";
            echo "</form>";

        $valorT += $_POST["notis"];
        $valorT += $_POST["notis1"];
        $valorT += $_POST["notis2"];
        $valorT /= 3;

        echo "Su Promedio fue {$valorT} <br><br>";
        if ($valorT >= 3.9) {
            echo "USTED HA SIDO BECADO ";
        }else{
            echo "ESTUDIE VAGO";
        }
    }

    ?>