<?php
	require_once "config.php";
	include("delete.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<!-- see https://phpgurukul.com/read-edit-delete-update-data-using-php-prepared-statement/ for documentation -->

<center><h3><b><em>Fetch, Edit</em></b> and <b><em>Delete</em></b> from database using php prepared statement</h3></center>

<table border="1" id="table">
	<thead>
		<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Contact No.</th>
		<th>Email</th>
		<th>Address</th>
		<th>Reg Date</th>
		<th>Action</th>
	</tr>
	</thead>

	<?php
		// code for read or fetch the data
		$ret = "SELECT * FROM tbl_users";
		$stmt2 = $conn->prepare($ret);
		$stmt2->execute();
		// getting the result row
		$res = $stmt2->get_result();
		$cnt = 1;

		while ($row=$res->fetch_object()) {
		?>

<tbody>
		<tr>
			<td><?php echo $cnt; ?></td>
			<td><?php echo $row->full_name; ?></td>
			<td><?php echo $row->mobile; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->address; ?></td>
			<td><?php echo $row->reg_date; ?></td>
			<td>
				<a href="edit?id=<?php echo $row->id; ?>">Edit</a> | <a href="index?delete=<?php echo $row->id; ?>">Delete</a>
			</td>
		</tr>
	</tbody>

	<?php	
		$cnt++; }
	?>
</table>

<div class="container">
	<a href="insert">Insert</a>
</div>
</body>
</html>