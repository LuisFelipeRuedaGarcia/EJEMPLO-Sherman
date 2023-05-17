<?php 

    if ($_POST) {
        
        $enviar = '"enviar"';
        $get = '"get"';
        $text = '"number"';
        $submit = '"submit"';
        $name = '"numero"';
        $numero = $_POST["primerNumero"];

        while ($numero != 0) {
            echo "<form method=$get> 
                    <label for=$name>Ingrese un nuevo numero</label>
                    <input type=$text name=$name><br><br>
                    <input type=$submit value= $enviar>
                </form>";
            
            $numero = $_POST["numero"];
        }
        
    }

?>