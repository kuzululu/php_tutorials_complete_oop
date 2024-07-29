<!DOCTYPE html>
<html lang="en">
<head>
	<title>$this keyword</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<!-- see https://phpgurukul.com/the-this-keyword/ for documentation -->
<?php
	class Car{
		// variables/properties
		public $comp;
		public $color;
		public $hasSunRoof;

		// behavior/function
		public function hello(){
			return "Beep I am <i> " . $this->comp . "</i>, and I am " . $this->color . " " . $this->hasSunRoof;
		}
	}

	// create to object
	$bmw = new Car();
	$hano = new Car();

	// set the values for the class properties
	$bmw->comp = "BMW";
	$bmw->color = "Red";
	$hano->comp = "Hano";
	$hano->color = "Blue";
	$hano->hasSunRoof = "has Roof";

	// call function method
	echo  $bmw->hello() . "<br>";
	echo $hano->hello();
?>
</body>
</html>