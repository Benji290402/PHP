<?php
    function sayHello() {
        echo "Hello";
    }
    function sayHelloTo( string $name){
        echo "Hello $name";
    }
    sayHello();
    sayHelloTo("john");
?>