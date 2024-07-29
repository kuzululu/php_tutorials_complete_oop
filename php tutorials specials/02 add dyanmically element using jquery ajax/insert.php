<?php
if (isset($_POST["btnSub"])) {
	// counting number of skills
	$count = count($_POST["skill"]);
	// getting post values
	$skill = $_POST["skill"];

	if ($count > 0) {
		for ($i=0; $i<$count; $i++) {
			
			if (trim($_POST["skill"][$i] != "")) {
				$sql = mysqli_query($conn, "INSERT INTO tbl_logs(skill) VALUES('$skill[$i]') ");
			}
		}
		echo "<script>alert('Skills inserted successfully');</script>";
	}else{
		echo "<script>alert('Please enter skill');</script>";
	}
}
?>