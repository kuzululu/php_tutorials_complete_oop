<?php
	require_once "config.php";
	include("insert.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Dynamically element using ajax</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript" src="js/jQuery-3.6.3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

<!-- see https://phpgurukul.com/how-to-dynamically-add-remove-input-fields-in-php-with-jquery-ajax/ for documentation -->

<form name="add_name" id="add-name" method="POST">
	
	<div id="dynamic-field">
		<p>
			<input type="text" name="skill[]" placeholder="Enter Skills" required=""><input type="button" name="add" class="add" value="Add More">
		</p>
	</div>

	<p>
			<input type="submit" name="btnSub" value="Submit">
		</p>
</form>

</body>
</html>