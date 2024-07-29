<?php
// Database configuration
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<form action="search.php" method="get">
    <input type="text" name="query" placeholder="Search...">
    <input type="submit" value="Search">
</form>

<?php
// Check if the search form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
    // Sanitize and store the search query
    $searchQuery = '%' . $_GET['query'] . '%'; // You can customize the search query as needed

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM your_table_name WHERE column_name LIKE ?");
    $stmt->bind_param('s', $searchQuery);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    // Fetch the results
    $results = $result->fetch_all(MYSQLI_ASSOC);

    // Display the results
    echo "Search Results:<br>";
    foreach ($results as $row) {
        echo $row['column_name'] . "<br>"; // Display the column you want to show in the search results
    }
}
?>
