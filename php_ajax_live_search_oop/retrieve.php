<?php

include("inc/config.php");
include("inc/class.php");

$dbConnection = new DbConnection($server, $user, $pass, $dbName);
$conn = $dbConnection->dbConnect();

if (isset($_POST["id"])) {
	$dataFetch = new DataFetcher($conn);
	$id = $_POST["id"];
	$row_retrieve = $dataFetch->fetchDataModal($id);

	// Output the user data in JSON Format
	header("Content-Type: application/json");
	echo json_encode($row_retrieve);

	// close connection
	$dbConnection->closeConnect();
}

?>

