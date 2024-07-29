<?php
	require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fetching data to Excel</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script type="text/javascript" src="js/jQuery-3.4.6.min.js"></script>
</head>
<body>

<div class="container">
<a href="generate-excel" class="btn btn-primary btn-xs pull-right"><b>+</b>Generate Excel</a>

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
		
		}
	?>
	</tbody>
</table>
</div>
</body>
</html>