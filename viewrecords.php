<?php 
require_once './includes/header.php';
require_once './db/conn.php';

// Construct the SQL query
$sql = "SELECT * FROM client_info WHERE 1";

// Execute the query
$result = mysqli_query($conn, $sql);
?>

<h2>Client Records</h2>
<a href="index.php">Back to Form</a>

<hr>

<?php

// Display all the records
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