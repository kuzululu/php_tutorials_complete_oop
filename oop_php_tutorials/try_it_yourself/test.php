<?php
class Car {
  public $color;
  public $model;

  // public function color($color) {
  //   $this->color = $color;
   
  // }

  // public function model($model){
  //  $this->model = $model;	
  // }

  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car();
$myCar->color = "Blue";
$myCar->model = "mazda";

$myCar2 = new Car();
$myCar2->color = "red";
$myCar2->model = "Toyota";

echo $myCar->message() . "<br>";
echo $myCar2->message();

// echo "<br>";
// $myCar = new Car("red", "Toyota");
// echo $myCar -> message();
?>