<?php
    class Person{
        //Atributos
        public $firstname = array();
        public $lastname = array();

        //Metodos
        public function save($firstname, $lastname){
           $this->firstname[] = $firstname;
           $this->lastname[] = $lastname;
        }

        public function show(){
            for($i=0; $i < count($this->firstname); $i++){
                $this->format($this->firstname[$i], $this->lastname[$i]);
            }
        }

        public function format($firstname, $lastname){
            echo "First name: " . $firstname . " | Last name: " . $lastname . "<br>";
        }
    }
    
    $person1 = new Person();
    $person1->save("Carlos", "Fernandez");
    $person1->save("Eduardo", "Garcia");
    $person1->show();
?>

