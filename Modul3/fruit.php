<?php
class Fruit {
    //Properties
    public $name;
    public $color;

    //Methods
    function __construct($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }

    function __destruct(){
        echo "The fruit is {$this->name}.";
    }
}

$apple = new Fruit("apple");

?>