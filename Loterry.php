<?php

    class Lottery{

        //Attributes
        public $number;
        public $tried;
        public $result = false;

        //Methods
        public function __construct($number, $tried){
            $this->number = $number;
            $this->tried = $tried;
        }

        public function raffle(){
            $minimum = $this->number / 2;
            $maximum = $this->number * 2;
            for($i=0; $i<$this->tried; $i++){
                $tried = rand($minimum, $maximum);
                $this->attempts($tried);
            }
        }

        public function attempts($tried){
            if($tried == $this->number){
                echo "<b>" . $tried . "==" . $this->number ."</b><br>";
                $this->result = true;
            }else{
                echo $tried . " != " . $this->number . "<br>";
            }
        }

        public function __destruct(){
            if($this->result){
                echo "!Felicidades, has acertado en " . $this->tried . " intentos!";
            }else{
                echo "Que lastima, has perdido en " . $this->tried . " intentos.";
            }
        }
    }

    $Lottery = new Lottery(11, 10);
    $Lottery->raffle();
?>