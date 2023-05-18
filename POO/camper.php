<?php 

    class Camper
    
    {
        //1. Declaracion de propiedades con modificadores de acceso
        
        private $nombre ;
        private $email;
        private $celular;

        //2. Metodo Constructor (Magic) 

        public function __construct($nombre , $email , $celular)
        {

            $this->nombre = $nombre;
            $this->email  = $email;
            $this->celular  = $celular;

        }

        //3. metodos (Getters and Setters)
            //Get -> Se obtienen valores de propiedades
            //Set -> Se modifican, setean valores de atributos - propiedades

        public function getNombre()
        {
            return $this->nombre;
        
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getCelular()
        {

            return $this->celular;

        }

        //Metodos con parametros

        public function getSaludo($saludo)
        {

            return $saludo . "camper";

        }

        //Metodos Setters 

        public function setNombre($nombre)
        {

            $this-> nombre = $nombre;

        }

        public function setEmail($email)
        {

            $this-> email = $email;

        }

        public function setCelular($celular)
        {

            $this-> celular = $celular;

        }
    };

    // Instanciar clases --> Variable de instancia

    $camper = new Camper("German Andres Torres Cely " , "tgerman181@gmail.com" , 3054075468);
    $camper-> setNombre("Camilo");
    $camper-> setEmail("noSeQueColocar@gmail.com");
    $camper-> setCelular("6355050");

    echo $camper -> getNombre() . "<br>";
    echo $camper -> getEmail() . "<br>";
    echo $camper -> getCelular() . "<br>";
    echo $camper -> getSaludo("Hello my dear student ");
?>