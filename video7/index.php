<?php

    class Page{

        //Attributes
        public $name = "Easy Code";
        public static $url = "www.easycode.com";
    
        //Methods
        public function welcome(){
            echo "Welcome to <b> " . $this->name . "</b> the page is <b>" . self::$url . "</b><br>";
        }
        
        public static function welcome2(){
            echo "Welcome " . self::$url;
        }
    }

    class Web extends Page{

    }

    $page = new Page();
    $page->welcome();

    Web::welcome2();
?>