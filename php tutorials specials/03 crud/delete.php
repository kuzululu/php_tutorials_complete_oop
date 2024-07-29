<?php
	if (isset($_GET["delete"])) {
		$id = intval($_GET["delete"]);
	 $adn = "DELETE FROM tbl_users WHERE id=?";
	 $stmt = $conn->prepare($adn);
	 $stmt->bind_param("i",$id);
	 $rs = $stmt->execute();
	 if ($rs==true) {
		 echo "<script>alert('User has been successfully Deleted');</script>";
		 echo "<script>window.location.href='index'</script>";
	 }
	}
?>