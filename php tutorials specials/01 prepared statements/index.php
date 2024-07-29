<?php
	require_once "config.php";
	include("prep.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Php Prepared Statment</title>
</head>
<body>

<!-- see http://phpgurukul.com/php-prepared-statements/ for documentation -->

<form class="form" name="stmt" method="POST">
	<p>
		<label>Name:</label> <br>
		<input type="text" name="name" required="">
	</p>

	<p>
		<label>Email: </label> <br>
		<input type="email" name="email" required="">
	</p>

	<p>
		<label>Contact Number: </label><br>
		<input 	type="text" name="contact" required="">
	</p>

	<p>
		<label>Address: </label><br>
		<textarea name="add" name="add" required=""></textarea>
	</p>

	<p>
		<input type="submit" name="btnSub" value="Send">
	</p>

</form>

</body>
</html>