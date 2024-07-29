<?php
	require_once "config.php";
?>
<table border="1" id="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Contact No.</th>
			<th>Email</th>
			<th>Address</th>
		</tr>
	</thead>
	<?php
		$filename = "EmpData";
		$query = mysqli_query($conn, "SELECT * FROM tbl_users");
		$cnt = 1;
		while ($row = mysqli_fetch_array($query)) {
		?>
	<tbody>	
		<tr>
			<td><?php echo $cnt; ?></td>
			<td><?php echo $row["full_name"]; ?></td>
			<td><?php echo $row["mobile"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["address"]; ?></td>
		</tr>
	<?php
			$cnt++;
			// generating excel files
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=".$filename."-Report.xls");
			header("Pragma: no-cache");
			header("Expires: 0");
		}
	?>
	</tbody>
</table>