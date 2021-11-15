<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  protected function getWeight()
  {
    return $this->weight;
  }

  public function setWeight($weight)
  {
    $this->weight = $weight;
  }

}

class Tree {
    public $name;
    public function getTreeName()
    {
        return $this->name;
    }
}
interface Sound {
    public function makeSound();
}

class Mango extends Fruit implements Sound {
    
    public function makeSound()
    {
        return "Bome";
    }
    public function getInfo()
    {
        echo "I'm a/an ".$this->name. " with {$this->color} and {$this->getWeight()} heavy and when fall it's sound {$this->makeSound()}";
    }

    public function getColor()
    {
        return "My Color is {$this->color}";
    }

    public function setColorInMango($color)
    {
        $this->color = $color;
    }
    
    public function setWeightInMango($weight)
    {
        $this->weight = $weight;
    }
}
    $mango = new Mango();
    $mango->name = 'Mango'; // OK
    $mango->setColor('Yellow'); // OK
    // $mango->setWeight(400);
    $mango->getInfo();
    echo "<br>";
//    echo $mango->getColor();


?>