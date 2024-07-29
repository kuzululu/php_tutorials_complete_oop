<!DOCTYPE html>
<html lang="en">
<head>
	<title>Creating a Class and Objects</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<!-- see https://phpgurukul.com/how-to-create-classes-and-objects/ for documentation -->

<?php
	class interestCalculator{
		// properties/variables
		var $rate;
		var $duration;
		var $capital;

		// behavior/function
		function calculateInterest(){
			// In Object-Oriented Programming (OOP) in PHP, the return statement is used to return a value from a function or method. The return statement allows you to pass a value back to the calling code, which can be used for further processing or assignment to a variable.
			return ($this->rate*$this->duration*$this->capital)/100;
		}
	}

	// create an object of class
	$calculate = new interestCalculator();
	// calling the properties
	$calculate->rate = 3;
	$calculate->duration = 2;
	$calculate->capital = 300;


	echo "the total is " . $calculate->calculateInterest();
	// In Object-Oriented Programming (OOP) in PHP, the -> (arrow) symbols are used to access properties and methods of an object. The -> is also known as the "object operator" or "dereference operator".
?>

</body>
</html>