<!DOCTYPE html>
<html lang="en">
<head>
	<title>Abstract and Classes Methods</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<!-- https://phpgurukul.com/abstract-classes-and-methods/ -->

<!-- 
/* in oop php -> symbols is used to access an object's properties and methods in OOP. It is also referred to as the "arrow" or "object operator".
When you create an object from a class in PHP, you can use the -> symbol to access the properties and methods of that object */
 -->
<?php 

	// declare class and methods as an abstract
	// Abstract classes are declared with the abstract keyword,
// and contain abstract methods
	// abstract class Car{
	// 	abstract public function calcNumMilesOnFullTank(){
	// 	}
	// }

// non abstract methods inside an abstract class
abstract class Car{

	// abstract class can have properties
	protected $tankVolume;

	// Abstract classes can have non abstract methods
	public function setTankVolume($volume){
		$this->tankVolume = $volume;
	}

	// abstact method
	abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car{
	// Since we inherited abstract method,
// we need to define it in the child class,
// by adding code to the method's body.
public function calcNumMilesOnFullTank(){
	return $miles = $this->tankVolume * 30 .  "<br>";
}

public function getColor(){
		return "blue";
}

}

class Toyota extends Car{

	public function calcNumMilesOnFullTank(){
		return $miles = $this->tankVolume * 33 . "<br>";
	}

	public function getColor(){
		return "Red <br>";
	}

}


class Moto extends Car{
	public function calcNumMilesOnFullTank(){
		return "Volume of the Moto is " . $miles = $this->tankVolume * 20 . "<br>";
	}

	public function getType(){
		return "Big Truck";
	}	

	public function getColor(){
		return "Sky Blue";
	}
}

// create new object for class
$toyota1 = new Toyota();
$toyota1->setTankVolume(10);
echo $toyota1->calcNumMilesOnFullTank();
echo $toyota1->getColor();

$honda1 = new Honda();
$honda1->setTankVolume(20);
echo $honda1->calcNumMilesOnFullTank();
echo $honda1->getColor() . "<br>";

$moto1 = new Moto();
$moto1->setTankVolume(50);
echo $moto1->calcNumMilesOnFullTank();
echo $moto1->getType() . " ";
echo $moto1->getColor();

?>
</body>
</html>
