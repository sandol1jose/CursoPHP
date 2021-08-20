<?php

class vehicle{
        private $wheels;
        private $color;

        public function turnon(){
            print "The car is running <br>";
        }

        public function turnof(){
            print "The vehicle is off <br>";
        }
    }

    trait vehicleadd{
        public function refuel($fuel){
            print "The vehicle has " . $fuel . " to fuel <br>";
        }
    }

    class car extends vehicle{
        private $seating;

        use vehicleadd; //using the trait
    }

    $car1 = new car();
    $car1->refuel(100);
    $car1->turnon();
    $car1->turnof();
?>