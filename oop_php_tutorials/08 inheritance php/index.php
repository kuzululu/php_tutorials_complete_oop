<!DOCTYPE html>
<html lang="en">
<head>
	<title>inheritance php</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<!-- https://phpgurukul.com/inheritance-in-php/ -->

<!-- 
/* in oop php -> symbols is used to access an object's properties and methods in OOP. It is also referred to as the "arrow" or "object operator".
When you create an object from a class in PHP, you can use the -> symbol to access the properties and methods of that object */
 -->
<?php 
	// syntax of inheritance
	/* class Parent{
		// parent class code
	}
	class Child extends Parent{
		// the child can use the parent's class code
	}*/

// parent class
class Car{
// private property class
	private $model;

	// public setter method behavior
	public function setModel($model){
		// get the property
		$this->model = $model;
	}

	public function hello(){
		return "beep I am <i> " . $this->model . "</i><br>";
	}

}

// child inherits the parent class code
class SportsCar extends Car{
	// no code for the child class
}

// create an instance from the child class
$sportsCar1 = new SportsCar();
$sportsCar5 = new SportsCar();

// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$sportsCar1->setModel("Mercedez");
$sportsCar5->setModel("Toyota");

// Use another method that the child class inherited
// from the parent class
echo $sportsCar1->hello();
echo $sportsCar5->hello() . "<br>";


// child class have its own methods and properties
class Car2{
	// set a private property can be used only by the parent
	private $model2;

	// Public methods and properties can be used
// by both the parent and the child classes

	public function setModel($model2){
		$this->model2 = $model2;
	}

	public function getModel(){
		return $this->model2;
	}
}

// The child class can use the code it inherited from the parent class,
// and it can also have its own code
class SportsCar2 extends Car2{
	private $style = "fast and furious";
	public function driveItWithStyles(){
		return "Drive a " . $this->getModel() . "<i> "	. $this->style . "</i><br>";
	}
}

// create an instance object from the child class
$sportsCar3 = new SportsCar2();
$sportsCar4 = new SportsCar2();

// Use a method that the child class inherited from the parent class
$sportsCar3->setModel("ferrari");
$sportsCar4->setModel("Honda");

// Use a method that was added to the child class
echo $sportsCar3->driveItWithStyles();
echo $sportsCar4->driveItWithStyles();
?>
</body>
</html>
