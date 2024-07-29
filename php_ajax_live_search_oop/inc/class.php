<?php

class DbConnection{
	
	private $server;
	private $user;
	private $pass;
	private $dbName;
	private $conn;

	// setter construct
	public function __construct($server, $user, $pass, $dbName){
		$this->server = $server;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbName = $dbName;
	}

	// getter connect to databasae
	public function dbConnect(){
		$this->conn = new mysqli($this->server, $this->user, $this->pass, $this->dbName);
		if ($this->conn->connect_error) {
			die("Connection Failed: " . $this->conn->connect_error);
		}
		return $this->conn;
	}

	// close connection
	public function closeConnect(){
		if ($this->conn) {
			$this->conn->close();
		}
	}
}


// insert records
class InsertRecords{
	private $conn;

	public function __construct($conn){
		$this->conn = $conn;
	}

	public function insertRecords($full_name, $email){
		$full_name = $this->conn->escape_string(trim($full_name));
		$email = $this->conn->escape_string(trim($email));

		$sql = "INSERT INTO tbl_list(full_name, email) VALUES(?,?)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("ss", $full_name, $email);
		$stmt->execute();
		$stmt->close();

		$this->showAlertAddSuccess();
	}

	private function showAlertAddSuccess(){
		echo "<script type='text/javascript' src='js/sweetalert2.all.min.js'></script>";
	echo "<script type='text/javascript'>
		
		document.addEventListener('DOMContentLoaded', ()=>{
			Swal.fire({
			 title: 'Success',
    text: 'Add Successfull!',
    icon: 'success',
    allowOutsideClick: false,
    showConfirmButton: false,
    allowEscapeKey: false,
    footer: '<a id=".'swal-success'." type=".'button'." class=".'btn btn-success'." href=".'index'.">Confirm</a>'
		});
		});
	
	</script>";

	}
}


// view all records information
class ViewAllRecords{

private $conn;

public function __construct($conn){
	$this->conn = $conn;
}

public function getAllRecords(){
	$sql = "SELECT * FROM tbl_list ORDER BY id DESC";
	$get_rec = $this->conn->query($sql);
	return $get_rec;
 }
}

// retrieve ajax modal
class DataFetcher{

	private $conn;

	public function __construct($conn){
		$this->conn = $conn;
	}

	public function fetchDataModal($id){
		$query = "SELECT * FROM tbl_list WHERE id = ?";
		$stmt = $this->conn->prepare($query);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$result = $stmt->get_result();
		$row_retrieve = $result->fetch_assoc();
		$stmt->close();
		return $row_retrieve;
	}
}

class UpdateQuery{

	private $conn;

	public function __construct($conn){
		$this->conn = $conn;
	}

	public function updateQuery($id, $update_name, $update_email){
		$sql = "UPDATE tbl_list SET full_name = ?, email = ? WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("ssi", $update_name, $update_email, $id);
		$stmt->execute();
		$stmt->close();
	}

	public function showUpdateAlert(){
	echo "<script type='text/javascript' src='js/sweetalert2.all.min.js'></script>";
	echo "<script type='text/javascript'>
			document.addEventListener('DOMContentLoaded', ()=>{
				Swal.fire({
			 title: 'Success',
    text: 'Update Successfull!',
    icon: 'success',
    allowOutsideClick: false,
    showConfirmButton: false,
    allowEscapeKey: false,
    footer: '<a id=".'swal-success'." type=".'button'." class=".'btn btn-success'." href=".'index'.">Confirm</a>'
		});
			});
	
	</script>";
 }
}

if (isset($_POST["btnUpdate"])) {
	$id = $_POST["id"];
	$dbConnection = new DbConnection($server, $user, $pass, $dbName);
	$conn = $dbConnection->dbConnect();

	$dataUpdate = new UpdateQuery($conn);

	if (!empty($id)) {
		$update_name = $conn->escape_string(trim($_POST["update_name"]));
		$update_email = $conn->escape_string(trim($_POST["update_email"]));

		$dataUpdate->updateQuery($id, $update_name, $update_email);
		$dataUpdate->showUpdateAlert();
	}

	$dbConnection->closeConnect();
}

// delete data
class DataDeleter{

	private $conn;

	public function __construct($conn){
		$this->conn = $conn;
	}

	public function delData($id){
		$sql = "DELETE FROM tbl_list WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param("i", $id);
		$result = $stmt->execute();
		$stmt->close();

		return $result;
	}

	public function showDelAlert(){
			echo "<script type='text/javascript' src='js/sweetalert2.all.min.js'></script>";
	echo "<script type='text/javascript'>
	
	document.addEventListener('DOMContentLoaded', ()=>{
	Swal.fire({
	title: 'Success',
    text: 'Delete Successfull!',
    icon: 'error',
    allowOutsideClick: false,
    showConfirmButton: false,
    allowEscapeKey: false,
    footer: '<a id=".'swal-success'." type=".'button'." class=".'btn btn-success'." href=".'index'.">Confirm</a>'
		});
	});
	
</script>";
	}
}


if (isset($_POST["btnDelete"])) {
	$id_delete = intval($_POST["id"]);
	$dbConnection = new DbConnection($server, $user, $pass, $dbName);
	$conn = $dbConnection->dbConnect();

	if (!empty($id_delete)) {
		$dataDeleter = new DataDeleter($conn);
		$result = $dataDeleter->delData($id_delete);

		if ($result) {
			$dataDeleter->showDelAlert();
		}
	}
}

// live search
class LiveSearch{

private $conn;

public function __construct($conn){
	$this->conn = $conn;
}

public function performLiveSearch($name){
	$sql_live = "SELECT * FROM tbl_list WHERE full_name LIKE '%$name%'";
	$get_live  = $this->conn->query($sql_live);
	$total = $get_live->num_rows;
	$data = "";

	$data .="

<table class='table table-hover table-bordered'>
<thead>
	<tr>
  <th>No.</th>
  <th>Full Name</th>
  <th>Email</th>
  <th>Options</th>
	</tr>
</thead>
</tbody>
	";

	if ($total > 0) {
		$ctr = 1;
		while ($row_live = $get_live->fetch_assoc()) {
			
			$data .="
			<tr>
	   <td>".$ctr."</td>
	   <td>".$row_live['full_name']."</td>
	   <td>".$row_live['email']."</td>
	   <td class='text-center'>
     <a href='#' type='button' id='".$row_live['id']."' class='btn btn-outline-success edit-data' data-bs-toggle='modal' data-bs-target='#updateModal'><span class='fw-bolder'>U</span></a>
     <a href='#' id='".$row_live['id']."' class='btn btn-outline-danger delete-data' data-bs-toggle='modal' data-bs-target='#deleteModal'><span class='fw-bolder'>D</span></a>
	   </td>
   </tr>

			";

		$ctr++;
		}
	$data .="
	</tbody>
	";
	}else{
	 $data .= "
<tbody>
 <tr>
   <td colspan='4' class='text-center fw-bolder'>No Record</td>
 </tr>
</tbody>
";
	 }
$data .="</table>";
echo $data;

 }
}

// usage trigger event for live seARch
if (isset($_POST["full_name"])) {
	$name = $_POST["full_name"];
	include("config.php"); //<-- include this before making an dbConnection instance
	$dbConnection = new DbConnection($server, $user, $pass, $dbName);
	$conn = $dbConnection->dbConnect();

	$livesearch = new LiveSearch($conn);
	$livesearch->performLiveSearch($name);

	$dbConnection->closeConnect();
}

?>