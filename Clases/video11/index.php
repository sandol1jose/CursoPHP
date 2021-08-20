<?php
//TRAITS

    trait Person{

        public $name;

        public function showname(){
            echo $this->name;
        }

        abstract function asignname($name);
    }

    trait employee{
        protected function mesage(){
            return " and I am a worker";
        }

        protected function hello(){
            echo "<br>";
            echo "Hello from trait employee";
        }
    }

    class personclass{
        use Person, employee;

        public function asignname($name){
            $this->name = $name . $this->mesage();
        }

        public function hello(){
            echo "<br>";
            echo "Hello from class personclass";
        }
    }

    $obj = new personclass();
    $obj->asignname("Jose");
    $obj->showname();
    $obj->hello();
?>