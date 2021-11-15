<?php
class Car
{
    public $color;// properties
    public $model;// properties
    public $vehicles; // property

    public function __construct($c,$m)// function declaration // will run automatically when object is created!!
    { // function body
        // var_dump($c);
        // var_dump($m);
        $this->color = $c;
        $this->model = $m;
        $this->vehicles = 4;
        // $this->printCarColor();
        // echo $this->message();
        // expected output ==>> echo "My car is a black Volvo!" ==> My car is a black Volvo!
    }

    public function message()// return string
    {
        $this->vehicles = 6;
        return "My car is a " . $this->color . " " . $this->model . " and it has ". $this->vehicles ." wheels!";

        $this->vehicles = 5;
        return "My car is a " . $this->color . " " . $this->model . " and it has ". $this->vehicles ." wheels!";
    }

    public function setVehicles($count)
    {
        $this->vehicles = $count;
    }

    public function getVehicles()
    {
        return $this->vehicles;
    }

    public function printCarColor()// return void
    {
        echo "My Car color is " . $this->color; 
    }
/*
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }

    public function messageCount($count)
    {
        return "My car is a " . $this->color . " " . $this->model . " and I've " . $count . " cars!";
    }
    */
}

$myCar = new Car("black","Volvo");//  object create
// $myCar->setVehicles(10);
$message =  $myCar->message();//My car is a black Volvo and it has 4 wheels!

// $myCar->printCarColor();// echo "My Car color is Black"; 
// $myCar->color = "BLUE";
// echo "<br>";
// $myCar->printCarColor();
// echo "<br>";
// echo $myCar->color . " and " . $myCar->model;

// echo "<br>";
// echo $myCar->message();
// echo "<br>";

    // $myCar2 = new Car("red");
    // echo $myCar2->color . " and " . $myCar2->model;// red and Toyota
    // echo "<br>";
    // echo $myCar2->message(); // My car is a red Toyota!
    // echo "<br>";


/*
    echo "<br>";
    echo $myCar->color . " and " . $myCar->model;
    echo $myCar->message();
    echo "<br>";
    echo $myCar->color;
    echo "<br>";
    echo $myCar->messageCount(4);
    echo "<br>";
    $myCar2 = new Car("red", "Toyota");
    echo $myCar2->message();
    echo "<br>";
    echo $myCar->color;
*/
?>