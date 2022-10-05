<?php
class Person{
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        echo "Pessoa Criada<br>";
    }

    function __destruct(){
        echo "tchau!";
    }

    public function show(){
        echo "{$this->name}, {$this->age} anos<br>";
    }
}