<!DOCTYPE html>
<html lang="en">
<head>
	<title>Accessing modifiers public vs private</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<!-- see https://phpgurukul.com/access-modifiers-public-vs-private/ -->
<?php 
/* in oop php -> symbols is used to access an object's properties and methods in OOP. It is also referred to as the "arrow" or "object operator".
When you create an object from a class in PHP, you can use the -> symbol to access the properties and methods of that object */


// public access modifiers

class Car{
	public $pub_model;
	public function getPubModel(){
		return "The car model is " . $this->pub_model . "<br>";
	}
}

// create an object for the class
$mercedes = new Car();

// access properties outside the class
$mercedes->pub_model = "Honda";

// access method or function outside the class
echo $mercedes->getPubModel();


// private access modifiers
class CarPrivate{
	// The private access modifier denies access to the method
// from outside the class’s scope
	private $pri_model;

	// The public access modifier allows the access to the method
// from outside the class
	public function setModel($pri_model){
		$this->pri_model = $pri_model;
	}

	public function getModel(){
		return "This car model is " . $this->pri_model . "<br>";
	}
}

$mer = new CarPrivate();

// set the car's model
$mer->setModel("Toyota");

// get the car's model
echo $mer->getModel();


// Validate that only certain car models are assigned
class privateCarVal{
	private $val_model;

	public function setModel($val_model){
		// Validate that only certain car models are assigned
	// to the $carModel property
		if(array($val_model)){
			$this->val_model = $val_model;
		}
	}
	public function getModel(){
		return "This model is validating the car of " . $this->val_model . "<br>";
	}
}

$toyota = new privateCarVal();
$toyota->setModel("BMW");
echo $toyota->getModel();

?>
</body>
</html>