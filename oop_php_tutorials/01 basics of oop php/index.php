<!DOCTYPE html>
<html lang="en">
<head>
	<title>Basics of OOP PhP</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<!-- see https://phpgurukul.com/how-to-create-classes-and-objects/ for documentation -->

<?php
	
	// creating a class
	class addnumbers{
		var $num1;
		var $num2;
		function addtwono(){
			return($this->num1+$this->num2);
		}
	}

	// create a new object
	$add = new addnumbers();
	$add->num1 = 5;
	$add->num2 = 6;

	// call the function inside the class
	echo $add->addtwono();

?>

</body>
</html>