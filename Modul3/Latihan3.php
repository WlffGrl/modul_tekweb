<?php
class Fruit {
    //Properties
    public $name;
    public $color;

    //Methods
    function get_name(){
        return $this->name;
    }

    function set_name($name){
        $this->name = $name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name ('apple');
$banana->set_name ('banana');
$apple->set_color ('Red');
$banana->set_color ('Yellow');

echo $apple->get_name();
echo $apple->get_color();
echo "<br>";
echo $banana->get_name();
echo $banana->get_color();
?>