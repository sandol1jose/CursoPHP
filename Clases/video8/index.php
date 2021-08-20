<?php

    interface Car{
        public function on();
        public function off();
    }

    interface Gasoline extends Car{
        public function emptytank();
        public function filltank($Quantity);
    }

    class Sports implements Gasoline{
        
        private $state = false;
        private $tank = 0;
        
        public function state(){
            if($this->state)
                print "The car is on and have " . $this->tank . " liters in the tank <br>";
            else
                print "The car is off <br>";
            
        }

        public function on(){
            if($this->state){
                print "You can't start the car twice <br>";
            }else{
                if($this->tank <= 0){
                    print "You can't start the car because the tank is empty";
                }else{
                    print "Car on <br>";
                    $this->state = true;
                }
            }
        }

        public function off(){
            if($this->state){
                print "Car off <br>";
                $this->state = false;
            }else{
                print "The car is already off <br>";
            }
        }

        public function emptytank(){
            $this->tank = 0;
        }

        public function filltank($Quantity){
            $this->tank = $Quantity;
        }

        public function use($km){
            if($this->state){
                $reduce = $km / 3;
                $this->tank = $this->tank - $reduce;
                if($this->tank <= 0){
                    $this->state = false;
                }
                print $km . " kilometers were traveled <br>";
            }else{
                print "The car is off and cannot be used <br>";
            }
        }
    }

    $obj = new Sports();
    $obj->filltank(100);
    $obj->on();
    $obj->use(350);
    $obj->state();

?>