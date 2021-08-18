<?php
    class Persona{
        //Atributos
        public $nombre = array();
        public $apellido = array();

        //Metodos
        public function guardar($nombre, $apellido){
           $this->nombre[] = $nombre;
           $this->apellido[] = $apellido;
        }

        public function mostrar(){
            for($i=0; $i < count($this->nombre); $i++){
                $this->formato($this->nombre[$i], $this->apellido[$i]);
            }
        }

        public function formato($nombre, $apellido){
            echo "Nombre: " . $nombre . " | Apellido: " . $apellido . "<br>";
        }
    }
    
    $persona1 = new Persona();
    $persona1->guardar("Carlos", "Fernandez");
    $persona1->guardar("Eduardo", "Garcia");
    $persona1->mostrar();
?>

