<?php 

    class Productos 
    {
        private $nombre;
        private $precio;
        private $stock;
        private $categoria;
        private $colores;
        private $tamaño;
        private $fecha_de_caducidad;

        public function __construct($nombre , $precio , $stock , $categoria , $colores , $tamaño , $fecha_de_caducidad)
        {

            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->stock = $stock;
            $this->categoria = $categoria;
            $this->colores = $colores;
            $this->tamaño = $tamaño;
            $this->fecha_de_caducidad = $fecha_de_caducidad;

        }

        //Metodos Getters

        public function getNombre(){
            return $this->nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function getStock(){
            return $this->stock;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function getColores(){
            return $this->colores;
        }
        public function getTamaño(){
            return $this->tamaño;
        }
        public function getFechaCaducidad(){
            return $this->fecha_de_caducidad;
        }

        //metodos Setters
        
        public function setNombre($nombre){
            return $this ->  nombre  = $nombre;
        }
        public function setPrecio($precio){
            return $this-> precio = $precio;
        }
        public function setStock($stock){
            return $this-> precio = $stock;
        }
        public function setCategoria($categoria){
            return $this-> categoria = $categoria;
        }
        public function setColores($colores){
            return $this-> colores = $colores;
        }
        public function setTamaño($tamaño){
            return $this-> tamaño = $tamaño;
        }
        public function setFechaCaducidad($fecha_de_caducidad){
            return $this-> fecha_de_caducidad = $fecha_de_caducidad;
        }

    }

    //Instanciar clases
    $producto1 = new Productos("manzana" , 2500 , 3 , "frutas" ,  "rojo y verde" , "grande" , "02/05/2030");
    $producto2 = new Productos("manzana" , 2500 , 3 , "frutas" ,  "rojo y verde" , "grande" , "02/05/2030");
    $producto3 = new Productos("manzana" , 2500 , 3 , "frutas" ,  "rojo y verde" , "grande" , "02/05/2030");
    $producto4 = new Productos("manzana" , 2500 , 3 , "frutas" ,  "rojo y verde" , "grande" , "02/05/2030");    
    
    //---------------------------PRODUCTO 1----------------------------

    $producto1 -> setNombre("carro");
    $producto1 -> setPrecio(4000000);
    $producto1 -> setStock(4);
    $producto1 -> setCategoria("automoviles");
    $producto1 -> setColores("Negro y Blanco");
    $producto1 -> setTamaño("Familiar");
    $producto1 -> setFechaCaducidad("No tiene");
    
    echo "--------------------------------------PRODUCTO 1-----------------------------------<br><br>";
    echo $producto1 -> getNombre()  . "<br>";
    echo $producto1 -> getPrecio()  . "<br>";
    echo $producto1 -> getStock()  . "<br>";
    echo $producto1 -> getCategoria()  . "<br>";
    echo $producto1 -> getColores()  . "<br>";
    echo $producto1 -> getTamaño()  . "<br>";
    echo $producto1 -> getFechaCaducidad()  . "<br>";
     
    //---------------------------PRODUCTO 2----------------------------

    $producto2 -> setNombre("manzana");
    $producto2 -> setPrecio(2000);
    $producto2 -> setStock(10);
    $producto2 -> setCategoria("frutas");
    $producto2 -> setColores("Verde y rojo");
    $producto2 -> setTamaño("Grande");
    $producto2 -> setFechaCaducidad("02/05/2023");
    
    echo "--------------------------------------PRODUCTO 2-----------------------------------<br><br>";
    echo $producto2 -> getNombre()  . "<br>";
    echo $producto2 -> getPrecio()  . "<br>";
    echo $producto2 -> getStock()  . "<br>";
    echo $producto2 -> getCategoria()  . "<br>";
    echo $producto2 -> getColores()  . "<br>";
    echo $producto2 -> getTamaño()  . "<br>";
    echo $producto2 -> getFechaCaducidad()  . "<br>";

    //---------------------------PRODUCTO 3----------------------------

    $producto3 -> setNombre("huevos");
    $producto3 -> setPrecio(500);
    $producto3 -> setStock(300);
    $producto3 -> setCategoria("comida");
    $producto3 -> setColores("Blanco y Cafe");
    $producto3 -> setTamaño("AA");
    $producto3 -> setFechaCaducidad("10/12/2023");
    
    echo "--------------------------------------PRODUCTO 3-----------------------------------<br><br>";

    echo $producto3 -> getNombre()  . "<br>";
    echo $producto3 -> getPrecio()  . "<br>";
    echo $producto3 -> getStock()  . "<br>";
    echo $producto3 -> getCategoria()  . "<br>";
    echo $producto3 -> getColores()  . "<br>";
    echo $producto3 -> getTamaño()  . "<br>";
    echo $producto3 -> getFechaCaducidad()  . "<br>";

    //---------------------------PRODUCTO 4----------------------------

    $producto4 -> setNombre("Gaseosa");
    $producto4 -> setPrecio(3000);
    $producto4 -> setStock(15);
    $producto4 -> setCategoria("Bebida");
    $producto4 -> setColores("Blanco y Transparente");
    $producto4 -> setTamaño("Mediano");
    $producto4 -> setFechaCaducidad("14/07/2023");
    
    echo "--------------------------------------PRODUCTO 4-----------------------------------<br><br>";
    echo $producto4 -> getNombre()  . "<br>";
    echo $producto4 -> getPrecio()  . "<br>";
    echo $producto4 -> getStock()  . "<br>";
    echo $producto4 -> getCategoria()  . "<br>";
    echo $producto4 -> getColores()  . "<br>";
    echo $producto4 -> getTamaño()  . "<br>";
    echo $producto4 -> getFechaCaducidad()  . "<br>";

    echo "-------------------------------------------------------------------------------------------<br><br>";
?>