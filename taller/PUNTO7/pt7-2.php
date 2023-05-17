<!-- 7. Programa que pida el ingreso del nombre y precio de un artículo y la
    cantidad que lleva el cliente. Mostrar lo que debe pagar el comprador
    en su factura. -->
<?php 

    if ($_GET) {
        $nombre = $_GET["nombre"];
        $nombreProducto = $_GET["nombreProducto"];
        $precio = $_GET["precio"];
        $cantidad = $_GET["cantidad"];
        $precioTotal = $precio * $cantidad;
        echo "-------------------------------------------------<br><br>";
        echo "16/05/2023 <br><br>";
        echo "-------------------------------------------------<br><br>";
        echo "El comprador {$nombre} <br><br>";
        echo "-------------------------------------------------<br><br>";
        echo "Tipo de producto: {$nombreProducto} <br><br>";
        echo "Cantidad del producto: {$cantidad} <br><br>";
        echo "Precio por unidad: {$precio} <br><br>";
        echo "-------------------------------------------------<br><br>";
        echo "Valor Total a pagar <br><br>";
        echo "{$precioTotal} <br><br>";
        echo "-------------------------------------------------<br><br>";
    }

?>