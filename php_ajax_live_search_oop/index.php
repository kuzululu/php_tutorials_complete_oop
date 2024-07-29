<?php
	include "inc/config.php";
	include "inc/class.php";

	// create an object for class
	$dbConnection = new DbConnection($server, $user, $pass, $dbName);

	// call connection function
	$conn = $dbConnection->dbConnect();

	if (isset($_POST["btnAdd"])) {
		$insert = new InsertRecords($conn);

		$insert->insertRecords($_POST["full_name"], $_POST["email"]);
	}
?>
<!DOCTYPE html>
<html>
<?php require_once "template-parts/head.php"; ?>
<body>
<?php
	require_once "modal/updateModal.php";
	require_once "modal/deleteModal.php";
?>

<h3>PHP mySQL AJAX Live Search</h3>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<form class="row needs-validation" novalidate="" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				
			<div class="col-md-12 mb-3">
				<label>Full Name</label>
					<input type="text" name="full_name" class="form-control" placeholder="Full Name" required="">
			</div>

			<div class="col-md-12 mb-3">
				<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="Email" required="">
			</div>

			<div class="col-md-12">
				<input type="submit" class="btn btn-outline-primary" name="btnAdd" value="Add">
			</div>

			</form>
		</div>
		<div class="col-md-8"></div>
	</div>
</div>

<hr class="text-danger">

<div class="container mt-3">
	<div class="row mb-3">
		<div class="col-md-4 d-md-flex">
		<label class="mt-2 me-1 fw-bolder">Filter:</label> <input type="search" id="getName" class="form-control"> <a href="index" class="btn btn-outline-warning" type="button">Reset</a>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-8">
		<div class="table-responsive">
		<div id="showData">


	<?php
		class RecordView{
			private $get_rec;

			public function __construct($get_rec){
				$this->get_rec = $get_rec;
			}

			public function displayRecords(){
	?>	
				<table class="table table-hover table-bordered">
				
			<thead>
				<tr>
					<th>No.</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Options</th>
				</tr>
			</thead>

			<tbody>

			<?php
				$ctr = 1;
				while ($row = $this->get_rec->fetch_assoc()) {
			?>
				<tr>
					<td><?= $ctr; ?></td>
					<td><?= $row["full_name"]; ?></td>
					<td><?= $row["email"]; ?></td>
					<td class="text-center">
						<a href="#" type="button" id="<?= $row['id']; ?>" class="btn btn-outline-success edit-data" data-bs-toggle="modal" data-bs-target="#updateModal"><span class="fw-bolder">U</span></a>
						<a href="#" id="<?= $row['id']; ?>" class="btn btn-outline-danger delete-data" data-bs-toggle="modal" data-bs-target="#deleteModal"><span class="fw-bolder">D</span></a>
					</td>
				</tr>
			<?php
				$ctr++;
				}
			?>
				</tbody>
			</table>
<?php
  }
	}		

// create object
	$viewRecordsManager = new ViewAllRecords($conn);

	// execute the function
	$get_rec = $viewRecordsManager->getAllRecords();

	$recordView = new RecordView($get_rec);
	$recordView->displayRecords();

?>
			</div>
		</div>
		</div>

		<div class="col-md-4"></div>
	</div>
</div>

<?php require_once "template-parts/bottom.php"; ?>
</body>
</html>