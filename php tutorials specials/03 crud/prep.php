<?php
	
	if (isset($_POST["btnSub"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		$add = $_POST["add"];

		// counter part of mysqli_query()
		// insert values into tables
		$ad = "INSERT INTO tbl_users(full_name,email,mobile,address) VALUES(?,?,?,?)";
		// prepare statement or calling database 
		$stmt = $conn->prepare($ad);
		// bind parameters
		$stmt->bind_param("ssss",$name,$email,$contact,$add);
		$stmt->execute();
		$stmt->close();
		echo "<script language='javascript'>alert('data added successfully')</script>";
		echo "<script>window.location.href='index'</script>";
	}


?>