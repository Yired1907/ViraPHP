<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vira_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE MyGuests SET 
            lastname='Nguyen',
            firstname='Truongg' WHERE id=42";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_errno($conn);
}

mysqli_close($conn);
