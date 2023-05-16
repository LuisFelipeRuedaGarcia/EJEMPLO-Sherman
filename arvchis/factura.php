<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto</title>
</head>
<body>

    <form action="factura.php" method ="post">
        <select name="criptos" id="cripto">
            <option value="27.093">BIT-COIN</option>
            <option value="1.818">ETHERIUM</option>
            <option value="1.700">SOLANA</option>
        </select>
        <label for="cantidad">Inserte la cantidad de criptos</label>
            <input type="text" name="cantidad">
            <input type= "submit" value= "enviar">
    </form>


    <?php
     if ($_POST) {
        $valor = $_POST["criptos"];
        $cantidad = $_POST["cantidad"];

        echo $cantidad * $valor;
     }
    ?>
</body>
</html>