<?php
class Fruit {
    //Properties
    public $color;
    private $name;
    // Methods
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
       $this->name = $name;
    }
}

class Apple extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }

    public function setNameFromApple($name)
    {
        // $this->setName($name);
        $this->name = $name;
    }

}

$apple = new Apple();
var_dump($apple);
$apple->color = "Red";
var_dump($apple);
$apple->setName("Apple");
var_dump($apple);
?>