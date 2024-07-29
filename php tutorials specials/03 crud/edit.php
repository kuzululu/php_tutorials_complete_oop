<?php
	require_once "config.php";
	include("edit_now.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<h2>Edit Data Using PhP Prepared Statement</h2>
<?php
	$id = $_GET["id"];
	$ret = "SELECT * FROM tbl_users WHERE id=?";
	$stmt2 = $conn->prepare($ret);
	$stmt2->bind_param("i",$id);
	$stmt2->execute();
	$res = $stmt2->get_result();
	$cnt = 1;
	while ($row = $res->fetch_object()) {
	?>

<form method="POST" name="stmt">
	<table>
		<tr>
			<th>Name: </th>
			<td><input type="text" name="update_name" required="" value="<?php echo $row->full_name; ?>"></td>
		</tr>
		<tr>
			<th>Contact No.: </th>
			<td><input type="text" name="update_mobile" required="" value="<?php echo $row->mobile; ?>"></td>
		</tr>
		<tr>
			<th>Email: </th>
			<td><input type="email" name="update_email" required="" value="<?php echo $row->email; ?>"></td>
		</tr>
		<tr>
			<th>Address: </th>
			<td><textarea name="update_add" required="" cols="30" rows="4"><?php echo $row->address; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btnUpdate" value="Update"></td>
		</tr>
	</table>
</form>

	<?php
	}
?>


<a href="index">View Record</a>
</body>
</html>