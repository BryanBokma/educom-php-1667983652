<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;

    }//end function construct

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";

    }//end function message

}//end class Car

$myCar = new Car ("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>