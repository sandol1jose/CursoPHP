<?php
//ABSTRACT CLASSES
    abstract class Mold{
        abstract public function entername($name);
        abstract public function getname();
    }

    class Person extends Mold{
        private $mesage = "Hello people of easy code";
        private $name;

        public function show(){
            print $this->mesage;
        }

        public function entername($name, $username = " cf"){
            $this->name = $name . $username;
        }
        
        public function getname(){
            print $this->name;
        }
    }

    $obj = new Person();
    $obj->entername("Jose", " Cardona");
    $obj->getname();
?>