<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chaining methods and properties</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<!-- seehttps://phpgurukul.com/chaining-methods-and-properties/ for documentation -->
<?php 
	class Car{
		public $tank;

		// add two methods inside a class
		
		// Add gallons of fuel to the tank when we fill it
		public function fill($float){
			$this->tank += $float;
			return $this;
		}

		// Subtract gallons of fuel from the tank as we ride the car
		public function ride($float){
			$miles = $float;
			$gallons = $miles/50;
			$this->tank -= $float;
			return $this;
		}
	}

	// create new object
	$bmw = new Car();
	// Add 10 gallons of fuel, then ride 40 miles
// and get the number of gallons in the tank
	$tank = $bmw->fill(10)->ride(40)->tank;
	echo "The number of gallons left in tank is " . $tank . " gal";
?>
</body>
</html>