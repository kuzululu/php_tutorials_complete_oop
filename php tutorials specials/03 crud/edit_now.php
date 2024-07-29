<?php
	if (isset($_POST["btnUpdate"])) {
		$update_name = $_POST["update_name"];
		$update_mobile = $_POST["update_mobile"];
		$update_email = $_POST["update_email"];
		$update_add = $_POST["update_add"];

		$uid = $_GET["id"];
		$ad="UPDATE tbl_users SET full_name=?,email=?,mobile=?,address=? where id=?";
		$stmt= $conn->prepare($ad);
		$stmt->bind_param("ssssi",$update_name,$update_email,$update_mobile,$update_add,$uid);
		$stmt->execute();
		$stmt->close();
		echo "<script language='javascript'>alert('Data updated Successfully');</script>" ;
		echo "<script>window.location.href='index'</script>" ;
	}
?>

