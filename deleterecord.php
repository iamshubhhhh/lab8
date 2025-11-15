<?php 
require_once './includes/header.php';
require_once './db/conn.php';

// Handle deletion if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['client_id'])) {
$client_id = mysqli_real_escape_string($conn, $_POST['client_id']);

$delete_sql = "DELETE FROM client_info WHERE client_id = '$client_id'";

if (mysqli_query($conn, $delete_sql)) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "Record deleted successfully!<br>";
    } else {
        echo "No record found with that Client ID.<br>";
    }
} else {
    echo "Error deleting record: " . mysqli_error($conn) . "<br>";
}
}

// Fetch all records to display
$sql = "SELECT * FROM client_info WHERE 1";
$result = mysqli_query($conn, $sql);
?>

<h2>Delete Client Record</h2>
<a href="index.php">Back to Form</a>

<h3>Enter Client ID to Delete:</h3>
<form method="post" action="deleterecord.php">
    <label>Client ID: </label>
    <input type="number" name="client_id" required>
    <button type="submit">Delete</button>
</form>

<hr>

<h3>Current Records:</h3>

<?php
if($result) {
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["client_id"] . " ";
            echo $row["email"] . " ";
            echo $row["address"] . " ";
            echo $row["city"] . " ";
            echo $row["province"] . " ";
            echo $row["postalcode"] . "<br>";
        }
    } else {
        echo "No records found";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php require_once './includes/footer.php'; ?>