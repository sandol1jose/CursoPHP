<?php namespace Controllers;

    class seccionesController{

        public function index(){
            print "Hola soy el index de la seccion";
        }
        
        public function ver($num){
            print "Es el numero: " . $num;
        }
    }
?>