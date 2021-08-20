<?php

    class Facebook{

        //Attributes
        public $name;
        public $age;
        private $password;

        //Methods
        public function __construct($name, $age, $password){
            $this->name = $name;
            $this->age = $age;
            $this->password = $password;
        }

        public function seeinformation(){
            echo "Name: " . $this->name . "<br>";
            echo "Age: " . $this->age . "<br>";
            $this->changePassword("54321");
            echo "Password: " . $this->password . "<br>";
        }

        private function changePassword($password){
            $this->password = $password;
        }
    }

    $facebook = new Facebook("Jose Sandoval", 20, "123465789");
    $facebook->seeinformation();

?>