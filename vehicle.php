<?php

    class vehicle{

        //Attributes
        public $engine = false;
        public $brand;
        public $color;

        //Methods
        public function state(){
            if($this->engine) 
                echo "The engine is running<br>";
            else
                echo "The engine is off<br>";
        }

        public function turnon(){
            if($this->engine){
                echo "Be careful, the engine is running.<br>";
            }else{
                echo "The engine is now running.<br>";
                $this->engine = true;
            }
        }
    }

    class motorcycle extends vehicle{

        public function statemotorcicle(){
            $this->state();
        }
    }

    class Quadbike extends motorcycle{

    }

    $Quadbike = new Quadbike();
    $Quadbike->state();
    $Quadbike->turnon();

?>