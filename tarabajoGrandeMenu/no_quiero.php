<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo a</title>
</head>
<body>
    <form action="no_quiero.php" method="POST">
        <label>Inserte un numero de la lista</label>
            <input type="number" name="numero" min="1" max="15">
            <input type="submit" name="send" value="enviar">
        <p>----------------------------------------------------------------</p>
        <label>1. Lectura de datos</label><br>
        <label>2. Crear Objeto</label><br>
        <label>3. Mostrar Objeto</label><br>
        <label>4. Crear Array</label><br>
        <label>5. Mostrar Array</label><br>
        <label>6. Elimine el primer elemento del Array</label><br>
        <label>7. Elimine el ultimo elemento del Array</label><br>
        <label>8. Eliminar cualquier elemento del Array</label><br>
        <label>9. Agregar elemento al comienzo del Array</label><br>
        <label>10. Agregar elemento al final del Array</label><br>
        <label>11. Crera Array con objetos </label><br>
        <label>12. Iterar Array con objetos (FOR)</label><br>
        <label>13. Iterar Array con objetos (ForEach)</label><br>
        <label>14. Iterar Array con objetos (MAP) y crear copia</label><br>
        <label>15. Proceso personal</label><br>
        <p>----------------------------------------------------------------</p><br><br><br><br><br><br><br>
        
    </form>
    <?php 
        session_start(); //USA $_SESSION["arraydenumeros"] PARA ALMACENAR EN LA SESION
    
        if (isset($_POST["numero"]) || isset($_SESSION["numero"])) {

            if (isset($_POST["numero"])){
            $numero = $_POST["numero"];
            $_SESSION["numero"] = $_POST["numero"];
            }
            else {
              $numero = $_SESSION["numero"];
            };

            switch ($numero) {
                case 1:

                    if ($_POST["dato"] || $_SESSION["dato"]) {

                        $dato = $_POST["dato"];
                        /* $arrayText = array_push($dato); */
                         
                        if (isset($_POST["dato"])){
                            $dato = $_POST["dato"];
                            $_SESSION["dato"] = $_POST["dato"];
                            }
                            else {
                              $dato = $_SESSION["dato"];
                            };
                        echo $dato;
                        }

                    
                    else{
                    echo '
                    <form action="no_quiero.php" method="POST">
                        <label>Inserte dato</label>
                        <input type="text" name="dato">
                        <input type="submit" name="enviar">
                    </form>
                    ';}
                    break;
                case 2:
                    echo "number 2";
                    break;
                case 3:
                    echo "number 3";
                    break;
                case 4:
                    echo "number 4";
                    break;
                case 5:
                    echo "number 5";
                    break;
                case 6:
                    echo "number 6";
                    break;
                case 7:
                    echo "number 7";
                    break;
                case 8:
                    echo "number 8";
                    break;
                case 9:
                    echo "number 9";
                    break;
                case 10:
                    echo "number 10";
                    break;
                case 11:
                    echo "number 11";
                    break;
                case 12:
                    echo "number 12";
                    break;
                case 13:
                    echo "number 13";
                    break;
                case 14:
                    echo "number 14";
                    break;
                case 15:
                    echo "number 15";
                    break;
                default:
                    echo "Numero no encontrado";
                    break;
            }
        }

        
    
    ?>
</body>
</html>