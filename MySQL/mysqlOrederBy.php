<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vira_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname LIMIT 1,2"; //====> PHP MySQL Limit Data Selections
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th style='width:150px;border:1px solid black;'>ID</th>
          <th style='width:150px;border:1px solid black;'>Name</th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='width:150px;border:1px solid black;'>" . $row["id"] .
            "</td><td style='width:150px;border:1px solid black;'>" . $row["firstname"] . " " . $row["lastname"] .
            "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
