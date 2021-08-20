<?php

    function autoload($class){
        include "clases/" . $class . ".php";
    }

    spl_autoload_register('autoload');

    $obj = new Car();
    $obj->show("Hello");

    $obj = new Person();
    $obj->show("Hello World");
?>